<form class="form-horizontal" method="post" action="">
    {{csrf_field()}}
    {{--生成隐藏域来通过csrf验证（laravel默认开启post验证csrf）--}}

    {{--添加姓名--}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-5">
            <input type="text" name="members[姓名]" value="{{old('members')['姓名'] ? old('members')['姓名']:$member->姓名}}" class="form-control" id="姓名" placeholder="请输入姓名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('members.姓名')}}</p>
        </div>
    </div>
    {{--添加出生日期--}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">出生日期</label>
        <div class="col-sm-5">
            <input type="text" name="members[出生年月日]" value="{{old('members')['出生年月日'] ? old('members')['出生年月日']:$member->出生年月日}}" class="form-control" id="出生年月日" placeholder="请输入出生年月日    例：1995.12.15">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('members.出生年月日')}}</p>
        </div>
    </div>
    {{--添加邮箱--}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">个人邮箱</label>
        <div class="col-sm-5">
            <input type="text" name="members[邮箱]" value="{{old('members')['邮箱'] ? old('members')['邮箱']:$member->邮箱}}" class="form-control" id="邮箱" placeholder="请输入邮箱    例：281206814@qq.com">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('members.邮箱')}}</p>
        </div>
    </div>
    {{--添加学历--}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">学历</label>
        <div class="col-sm-5">
            <input type="text" name="members[学历]" value="{{old('members')['学历'] ? old('members')['学历']:$member->学历}}" class="form-control" id="学历" placeholder="请输入学历    例：本科">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('members.学历')}}</p>
        </div>
    </div>
    {{--添加联系方式--}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">联系方式</label>
        <div class="col-sm-5">
            <input type="text" name="members[联系方式]" value="{{old('members')['联系方式'] ? old('members')['联系方式']:$member->联系方式}}" class="form-control" id="联系方式" placeholder="请输入联系方式    例：15728009293">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('members.联系方式')}}</p>
        </div>
    </div>
    {{--添加身份信息--}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">身份证</label>
        <div class="col-sm-5">
            <input type="text" name="members[身份证]" value="{{old('members')['身份证'] ? old('members')['身份证']:$member->身份证}}" class="form-control" id="身份证" placeholder="请输入身份证    例：342623199512157959">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('members.身份证')}}</p>
        </div>
    </div>
    {{--添加性别--}}
    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>
        <div class="col-sm-5">
            @foreach($member->getsex() as $ind=>$val)
                <label class="radio-inline">
                    <input type="radio" name="members[性别]"
                           {{isset($member->性别) && $member->性别==$ind ? 'checked':''}}
                           value="{{$ind}}"> {{$val}}
                </label>
            @endforeach
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('members.性别')}}</p>
        </div>
    </div>
    {{--提交--}}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <br />
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>
