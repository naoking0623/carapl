@extends('layouts.main')
@section('title', '在庫車登録')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 style="text-align:center">
                在庫車の登録
            </h1>
           <form action="{{ route('admin.stock.create') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
            <div class="cozyspace-wrapper">
                <div class="container">
                    <!--<div class="cozyspace-img">-->
                            <!--<img src="sample.gif" alt="サンプル" width="300" height="200">  -->
                    <!--    <img src="{{ secure_asset('img/sample1.jpeg' ) }}" alt="carimage"　width="450" height="280"　>-->
                    <!--</div>-->
                    <div class="cozyspace-message">
                        <div class="form-group row">
                        <label class="col-md-2">車名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="cozyspace-message">
                        <div class="form-group row">
                        <label class="col-md-2">走行距離</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="odometer" value="{{ old('odometer') }}">
                            <P>km</P>
                        </div>
                    </div>
                    <div class="cozyspace-message">
                        <div class="form-group row">
                        <label class="col-md-2">車検</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="inspection" value="{{ old('inspection') }}">
                            <p>年</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>   
                    @csrf  
                    <!--<input type="submit" value="上記内容で登録する" class="btn btn-orange">-->
                     <input type="submit" class="btn btn-primary" value="上記の内容で登録する">
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>    
@endsection    