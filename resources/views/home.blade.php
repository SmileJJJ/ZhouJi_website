@extends('member_system.member_app')

@section('content_member')
    <!-- 右侧内容区域 -->
    <div class="col-md-9">
    @include('member_system.message')
        <!-- 自定义内容区域 -->
        <div class="panel panel-default">
            <div class="panel-heading">成员列表</div>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <tr>
                    {{--<th>ID</th>--}}
                    <th width="80">姓名</th>
                    <th>性别</th>
                    <th>邮箱</th>
                    <th>联系方式</th>
                    <th>添加时间</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                    <tr>
                        <th scope="row">{{$member->姓名}}</th>
                        {{--{{$member->ID}}--}}
                        {{--<td>{{$member->姓名}}</td>--}}
                        <td>{{$member->getsex($member->性别)}}</td>
                        <td>{{$member->邮箱}}</td>
                        <td>{{$member->联系方式}}</td>
                        <td>{{date('Y-m-d',$member->created_at)}}</td>
                        <td>
                            <a href="{{url('member_detail',['id'=>$member->ID])}}">详情</a>
                            <a href="{{url('member_update',['id'=>$member->ID])}}">修改</a>
                            <a href="{{url('member_delete',['id'=>$member->ID])}}"
                                onclick="if(confirm('确定要删除吗？')==false) return false "
                            >删除</a>
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
