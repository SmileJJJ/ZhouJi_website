@extends('layouts.home_app')

@section('content_app')
    <!-- 中间内容区局 -->
    <div id="002" class="container">
        <div class="row">

            <!-- 左侧菜单区域   -->
            <div class="col-md-3">
                @section('leftmenu')

                    <div class="list-group">
                        <a href="{{url('home')}}" class="list-group-item
                            {{Request::getPathInfo()!='/member_create'?'active':''}}
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

@endsection
