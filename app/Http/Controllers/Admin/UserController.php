<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
        return view('admin.user.create');
    }

    public function create()
    {
        return redirect('admin/user/create');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function update()
    {
        return redirect('admin/user/edit');
    } //
}
