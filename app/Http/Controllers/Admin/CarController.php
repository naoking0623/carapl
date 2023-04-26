<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
      public function add()
    {
        return view('admin.stock.create');
    }
    
   
    public function stock(Request $request)
    {
        // 以下を追記
        // Validationを行う
        $this->validate($request, Car::$rules);

        $car = new Car;
        $form = $request->all();
        
        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/img');
            $car->image_path = basename($path);
        } else {
            $car->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $car->fill($form);
        $car->save();

        return redirect('admin/stock/create');
    }
    // 追記0413
     public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $car = Car::find($request->id);

    //     削除する
    //     $car->delete();

    // //     return redirect('admin/stock/create');
    // }
}
}