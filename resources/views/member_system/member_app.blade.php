@extends('layouts.app')

@section('content')
    <!-- 头部 -->
    @section('header')
        <div class="jumbotron">
            <div class="container">
                <h2>宁波洲际信息科技有限公司</h2>
                <p> 成员信息       仓库系统</p>
            </div>
        </div>
    @show

    <!-- 中间内容区局 -->
    <div class="container">
        <div class="row">

            <!-- 左侧菜单区域   -->
            <div class="col-md-3">
                @section('leftmenu')

                    <div class="list-group">
                        <a href="{{url('home')}}" class="list-group-item
                            {{Request::getPathInfo()=='/home'?'active':''}}
                                ">成员列表</a>
                        <a href="{{url('member_create')}}" class="list-group-item
                            {{Request::getPathInfo()=='/member_create'?'active':''}}
                                ">新增成员</a>
                    </div>
                @show
            </div>

            <!-- 右侧内容区域 -->
            <div class="col-md-9">

                @yield('content_member')

            </div>
        </div>
    </div>

    <!-- jQuery 文件 -->
    <script src="{{asset('static/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap JavaScript 文件 -->
    <script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

@section('javascript')

@show

@endsection