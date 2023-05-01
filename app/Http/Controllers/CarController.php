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
        $car_id = $request->car_id;
        $reservation_id=$reservation->id;
        // return view('yoyaku.check',compact('car','reservation'));
        
        // return redirect('yoyaku/cheak',['car_id'=>$car_id, 'reservation_id'=> $reservation_id]);
        return redirect()->route("yayaku.check", ['car_id'=>$car_id, 'reservation_id'=> $reservation_id, 'user_id' => $request->user_id]);
    }
  
     public function check(Request $request)
    {
    
        $car=Car::find($request->car_id);
        $reservation=Reservation::find($request->reservation_id);
        $reservation_list = Reservation::where('user_id', $request->user_id)->get();
        //$car->delete();
        //$reservation->delete();
        return view('yoyaku.check', compact('car','reservation','reservation_list'));
        
    }    

    // 追記0413
     public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $car = Car::find($request->id);

        // 削除する
        $car->delete();
        //$->deletee();
    // //     return redirect('admin/stock/create');
    // }
    }
}
