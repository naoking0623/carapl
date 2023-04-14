<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class StockController extends Controller
{
    public function stocklist()
    {
        $cars = Car::all();
        return view('admin.stock.list', compact('cars'));
    }
 
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $car = Car::find($request->id);
            
            // 削除する
        $car->delete();

        return redirect('admin/stock/list');
    }
}