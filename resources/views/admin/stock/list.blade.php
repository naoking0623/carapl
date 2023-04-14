@extends('layouts.main')
@section('title', '在庫車一覧画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 style="text-align:center">在庫車一覧</h1>
                @foreach($cars as $car)
                <div class="cozyspace-wrapper">
                    <div class="container">
                      <div class="cozyspace-img">
                      <img src="{{secure_asset("/storage/image/". $car->image_path)}}" alt="carimage"　width="450" height="300"　>
                      </div>
                      <div class="cozyspace-message">
                        <h3 >車種：{{$car->name}}</h3>
                        <ul >
                        　　<li>走行距離:{{$car->odometer}}km</li>
                            <li>車検:{{$car->inspection}}まで</li>
                        </ul>
                    </div>
                </div>
                <div>
                <a href="{{ route('admin.stock.delete', ['id' => $car->id]) }}">削除</a>
                <br>
                </div>
                @endforeach
            </div>
       </div>
   </div>
@endsection