@extends('layouts.main')
@section('title', '予約確認画面')

@section('content')
    <h1 style="text-align:center">予約した画面</h1>
        @foreach($reservation_list as $reservation)
            @php
                $car = $reservation->car;
            @endphp
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
                    <ul >
                        <!--<li> type="hidden" {{$reservation ->reservation_id}}</li>-->
                        <li>予約日:{{$reservation ->reservation_date}}日</li>
                        <li>予約時間:{{$reservation ->reservation_time}}時</li>
                        <!--<li>type="hidden" {{$reservation ->user_id}}</li>-->
                        <!--<li>type="hidden" {{$reservation ->car_id}}</li>-->
                    </ul>
                    <a href="{{ route('admin.stock.delete', ['id' => $car->id]) }}">削除</a>
        @endforeach
                    <br>
                    <br>
                    <br>
                      <a href="/" class="btn btn--orange"><i class="fas fa-phone-alt fa-position-center"></i>在庫一覧画面へもどる</a> 
                </div>
            </div>
        </div>
@endsection