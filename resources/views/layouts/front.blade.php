<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('com/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>超群永强</h1>
            <p>Chaoqun Yongqiang</p>
            <button class="btn btn-info" onclick="location.href='login'">开始吧</button>
        </div>
    </div>
    <div class="container">

    <ul class="nav nav-tabs">
        <li><a href="">主页</a></li>
        <li><a href="">公司简介</a></li>
        <li><a href="">产品中心</a></li>
        <li><a href="">新闻中心</a></li>
        <li><a href="">联系我们</a></li>
        <li><a href="">在线反馈</a></li>
    </ul>
        @yield("content")

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
