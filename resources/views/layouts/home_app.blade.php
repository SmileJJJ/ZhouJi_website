@extends('layouts.app')

@section('content')
    <!-- 头部 -->
    @section('header')
        <div class="jumbotron">
            <div class="container">
                <h2>宁波洲际信息科技有限公司</h2>
                <p>
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        成员信息</a>
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        仓库系统</a>
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        日志系统</a>
                </p>
            </div>
        </div>
    @show

    @yield('content_app')

    <!-- jQuery 文件 -->
    <script src="{{asset('static/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap JavaScript 文件 -->
    <script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

    @section('javascript')

    @show

@endsection