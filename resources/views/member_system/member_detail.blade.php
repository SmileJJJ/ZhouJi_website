@extends('member_system.member_app')
@section('content_member')
    <div class="panel panel-default">
        <div class="panel-heading">成员详情</div>

        <table class="table table-bordered table-striped table-hover ">
            <tbody>
            <tr>
                <td width="50%">ID</td>
                <td>{{$member->ID}}</td>
            </tr>
            <tr>
                <td>姓名</td>
                <td>{{$member->姓名}}</td>
            </tr>
            <tr>
                <td>出生日期</td>
                <td>{{$member->出生年月日}}</td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td>{{$member->邮箱}}</td>
            </tr>
            <tr>
                <td>学历</td>
                <td>{{$member->学历}}</td>
            </tr>
            <tr>
                <td>联系方式</td>
                <td>{{$member->联系方式}}</td>
            </tr>
            <tr>
                <td>身份证</td>
                <td>{{$member->身份证}}</td>
            </tr>
            <tr>
                <td>性别</td>
                <td>{{$member->getsex($member->性别)}}</td>
            </tr>
            <tr>
                <td>添加日期</td>
                <td>{{date('Y-m-d',$member->created_at)}}</td>
            </tr>
            <tr>
                <td>最后修改</td>
                <td>{{date('Y-m-d',$member->updata_at)}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@stop