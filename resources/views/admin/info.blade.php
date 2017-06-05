@extends('admin.home')

@section('list')
    <ul class="list-group">
        <li class="list-group-item list-group-item-heading">简介管理</li>
        @foreach($list as $li)
        <li class="list-group-item list-group-item-text"><a href="detail?id={{$li -> id}}" class="left"> 标题：{{$li->title}}</a> <a
                    href="delete?id={{$li -> id}}" class="glyphicon glyphicon-remove right text-danger"></a>
            <a href="update?id={{$li -> id}}">编辑</a>
        </li>
            @endforeach
        <button class="btn btn-info" onclick="location.href='add'">新增</button>
    </ul>
    @stop