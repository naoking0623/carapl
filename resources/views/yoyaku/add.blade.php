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
                            <!--<img src="sample.gif" alt="サンプル" width="300" height="200">  -->
                        <img src="{{ secure_asset('img/sample1.jpeg' ) }}" alt="carimage"　width="450" height="280"　>
                    </div>
                    <div class="cozyspace-message">
                        <h3 >車種：タント</h3>
                        <ul >
                            <li>走行距離:10000km</li>
                            <li>年式:2022年式</li>
                            <li>車検：2,024年3月まで</li>
                        </ul>
                            <!--<button type="button" class="btn btn-primary">この車の見学予約はこちらから</button>-->
                        <br>
                        <label for="start">予約日：</label><input type="date" id="start" name="trip-start"value="2018-07-22"min="2023-04-01" max="2028-12-31"></a>
                        <br>
                        <a>予約時間：</a>
                        <input type="time" name="time" list="time-list">
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
                        <a href="" class="btn btn--orange"><i class="fas fa-phone-alt fa-position-center"></i>上記内容で予約する</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>    
@endsection    