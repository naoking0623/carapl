<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Reservation;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index', compact('cars'));
    }
    
    public function company()
    {
        return view('company');
    }
    
     public function add(Request $request)
     
    {
        // dd("addがよばれた");
        $car = Car::find($request->id);
        return view('yoyaku.add', compact('car'));
    }
    
     
     public function create(Request $request)
     
    {
        // dd("checkがよばれた");
         // Validationを行う
        $this->validate($request,Reservation::$rules);
        $reservation = new Reservation;
        $form = $request->all();
        $car=Car::find($request->car_id);
        // $reservation =  Reservation::find($request->id);
        
         
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        // unset($form['image']);

       
        //   データベースに保存する
        $reservation->fill($form);
        $reservation->save();
        $car_id = $request->id;
        $reservation_id=$reservation->id;
        // return view('yoyaku.check',compact('car','reservation'));
        
        // return redirect('yoyaku/cheak',['car_id'=>$car_id, 'reservation_id'=> $reservation_id]);
        return redirect()->route("yayaku.check")->with(['car_id'=>$car_id, 'reservation_id'=> $reservation_id]);
    }
  
     public function check(Request $request)
    {
    
        $car=Car::find($request);
        $reservation=Reservation::find($request->reservation_id);
        return view('yoyaku.check', compact('car','reservation'));
        
    }    
    // public function yoyakucreate(Request $request)
    // {
    //     // 以下を追記
    //     // Validationを行う
    //     $this->validate($request, Car::$rules);

    //     $car = new Car;
    //     $form = $request->all();
    //     // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
    //     if (isset($form['image'])) {
    //         $path = $request->file('image')->store('public/image');
    //         $car->image_path = basename($path);
    //     } else {
    //         $car->image_path = null;
    //     }

    //     // フォームから送信されてきた_tokenを削除する
    //     unset($form['_token']);
    //     // フォームから送信されてきたimageを削除する
    //     unset($form['image']);

    //     // データベースに保存する
    //     $car->fill($form);
    //     $car->save();

    //     return redirect('stock/create');
    // }
}
