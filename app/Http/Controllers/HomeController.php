<?php

namespace App\Http\Controllers;

use App\members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=members::paginate(2);
        return view('home',[
            'members'=>$members,
        ]);
    }

    public function member_create(Request $request)
    {
        $member= new members();
        if($request->isMethod('POST'))
        {
            //2.validator类验证
            $validator=\Validator::make($request->input(),[
                'members.姓名'=>'required|min:2|max:20',
            ],[
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度不符合要求',
                'integer'=>':attribute 必须为整数',
            ],[
                'member.姓名'=>'姓名',
            ]);

            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
                echo 'aaaaa';
            }

            $data=$request->input('members');
            if(members::create($data))
            {
                return redirect('home')->with('success','添加成功!');
            }
            else
            {
                return redirect()->back();
            }
        }
        return view('member_system.member_create',[
            'member'=>$member,
        ]);
    }

    //保存添加
    public function member_save(Request $request)
    {
        $data=$request->input('members');
        var_dump($data);
        $member= new members();
        $member->姓名=$data['姓名'];
        $member->出生年月日=$data['出生年月日'];
        $member->邮箱=$data['邮箱'];
        $member->学历=$data['学历'];
        $member->联系方式=$data['联系方式'];
        $member->身份证=$data['身份证'];
//        $member->性别=$data['性别'];
//
//        if($member->save())
//        {
////            return redirect('home');
//            var_dump($data);
//        }
//        else
//        {
//            return redirect()->back();
//        }
    }

}
