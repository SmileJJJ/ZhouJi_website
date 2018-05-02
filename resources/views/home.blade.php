@extends('member_system.member_app')

@section('content_member')
    <!-- 右侧内容区域 -->
    <div class="col-md-9">
        <!-- 自定义内容区域 -->
        <div class="panel panel-default">
            <div class="panel-heading">学生列表</div>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th width="20">ID</th>
                    <th width="80">姓名</th>
                    <th width="80">性别</th>
                    <th width="100">出生日期</th>
                    <th width="120">邮箱</th>
                    <th width="120">联系方式</th>
                    <th width="100">添加时间</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                    <tr>
                        <th scope="row">{{$member->ID}}</th>
                        <td>{{$member->姓名}}</td>
                        <td>{{$member->性别}}</td>
                        <td>{{$member->出生日期}}</td>
                        <td>{{$member->邮箱}}</td>
                        <td>{{$member->联系方式}}</td>
                        <td>{{date('Y-m-d',$member->添加时间)}}</td>
                        <td>
                            <a href="">详情</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- 分页  -->
        <div>
            <div class="pull-right">
                {{$members->render()}}
            </div>
        </div>
    </div>

@endsection
