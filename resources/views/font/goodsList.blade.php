@extends('layouts.front')
@section('content')
    <ul class="list-group">

        @foreach($list as $li)
        <li class="list-group-item list-group-item-info">
            <a href="/goodsDetail?id={{$li -> id}}">{{$li -> name}}</a>
        </li>
            @endforeach
    </ul>
    @stop
