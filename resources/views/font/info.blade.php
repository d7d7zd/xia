@extends('layouts.front')

@section('content')
    <h1>{{$li -> title}}</h1>
    <p>类型：{{$li ->class}}</p>
    <div class="panel panel-info">
        {!! $li -> content !!}
    </div>
    @stop