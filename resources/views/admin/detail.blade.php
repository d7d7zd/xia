@extends('admin.home')

@section('list')
    <div class="panel panel-info">
        <div class="panel-heading">
            {{$li -> title}}
        </div>

        <div class="panel-body">
            {{$li -> content}}
        </div>
    </div>
    @stop