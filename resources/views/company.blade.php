@extends('layouts.main')
@section('title', '会社情報画面')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body">
                   <h1>元気自動車 <span class="badge badge-secondary">元気自動車</span></h1>
                </div>
            <img src="{{ secure_asset('img/sample1.jpeg' ) }}" alt="campanyimage">
                <div class="card-body card-font">
                <ul class="list-group">
                  <li class="list-group-item">代表者</li>西田　直記
                  <li class="list-group-item">住所</li>
                  <li class="list-group-item">連絡先</li>
                </ul>
                </div>
            </div>
             
            </div>
        </div>
    </div>
@endsection