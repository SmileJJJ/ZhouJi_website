@extends('member_system.member_app')
@section('content_member')
    @include('member_system.message')
    <div class="panel panel-default">
        <div class="panel-heading">信息修改</div>
        <div class="panel-body">
                @include('member_system.member_form')
        </div>
    </div>
@stop