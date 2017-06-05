@extends('admin.home')

@section('list')
    {{$update = false}}
    @if(isset($li))
        {{$update = true}}
    @else
        {{$li = null}}
    @endif
    <form action="{{$li?'updated?id='.$li->id:'newInfo'}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <label for="title">标题：</label>
            <input class="form-control" name="title" type="text" value="{{ $li?$li -> title:''}}">
        </div>

        <div class="form-group">
            <label for="class">类型：</label>
            <input class="form-control" name="class" type="text" value="{{$li?$li ->class:''}}">
        </div>

        <div class="form-group">
            <label for="content">内容：</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10">
                {{$li?$li -> content:''}}
            </textarea>
        </div>

        <button class="btn btn-info" type="submit">提交</button>
    </form>
    @stop