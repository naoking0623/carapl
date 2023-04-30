@extends('layouts.main')
@section('title', '予約登録')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 style="text-align:center">
                予約登録画面
            </h1>
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
                <br>
                </div>
                <br>
                 @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                <form action="{{ route('yayaku.create') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group row">
                            <input type="hidden" name="car_id" value="{{$car->id  }}">
                        </div>
                    <label for="start">予約日：</label><input type="date" id="start" name="reservation_date"value=""min="2023-04-01" max="2028-12-31"></a>
                        <br>
                        <a>予約時間：</a>
                        <input type="time" name="reservation_time" list="time-list">
                        <datalist id="time-list">
                            <option value="10:00">10時</option>
                            <option value="11:00">11時</option>
                            <option value="12:00">12時</option>
                            <option value="13:00">13時</option>
                            <option value="14:00">14時</option>
                            <option value="15:00">15時</option>
                            <option value="16:00">16時</option>
                            <option value="17:00">17時</option>
                            <option value="18:00">18時</option>
                        </datalist>
                        <br>
                       
                        @csrf
                        <input type="submit" class="btn btn-primary" value="上記で予約する">  
                </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>    
@endsection    