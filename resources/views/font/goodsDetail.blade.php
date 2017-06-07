@extends('layouts.front')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h1> {{$li -> name}} <small>类型：{{$li -> type}} </small></h1>
        </div>

        <div class="panel-body">
            {!! $li -> info !!}
        </div>
    </div>
    @stop