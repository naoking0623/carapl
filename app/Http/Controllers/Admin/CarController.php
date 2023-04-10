<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
      public function add()
    {
        return view('admin.car.create');
    }//
    public function create(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('admin/car/create');
    }

    public function edit()
    {
        return view('admin.uesr.edit');
    }

    public function update()
    {
        return redirect('admin/user/edit');
    } //
}
