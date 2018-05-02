@extends('member_system.member_app')

@section('content_member')
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">新增成员</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="">
                {{csrf_field()}}
                {{--生成隐藏域来通过csrf验证（laravel默认开启post验证csrf）--}}

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">姓名</label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" placeholder="请输入学生姓名">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">姓名不能为空</p>
                    </div>
                </div>
                <div class="form-group">

                    <div class="form-group">
                        <label for="age" class="col-sm-2 control-label">年龄</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="age" placeholder="请输入学生年龄">
                        </div>
                        <div class="col-sm-5">
                            <p class="form-control-static text-danger">年龄只能为整数</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">性别</label>

                        <div class="col-sm-5">
                            <label class="radio-inline">
                                <input type="radio" name="sex" value="option1"> 未知
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" value="option2"> 男
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" value="option3"> 女
                            </label>
                        </div>
                        <div class="col-sm-5">
                            <p class="form-control-static text-danger">请选择性别</p>
                        </div>
                    </div>
                {{--<div class="form-group">--}}
                    {{--<label for="姓名" class="col-sm-2 control-label">姓名</label>--}}

                    {{--<div class="col-sm-5">--}}
                        {{--<input type="text" name="members[姓名]"  class="form-control" id="姓名" placeholder="请输入成员姓名">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-5">--}}
                        {{--<p class="form-control-static text-danger">{{$errors->first('members.姓名')}}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop