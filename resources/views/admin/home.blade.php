@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="nav nav-tabs">
        <li><a href="infoList">简介管理</a></li>
        <li><a href="">商品管理</a></li>
        <li><a href="">新闻管理</a></li>
    </ul>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @yield('list')
        </div>
    </div>
</div>
@endsection
