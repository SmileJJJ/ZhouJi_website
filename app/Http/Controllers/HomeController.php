<?php

namespace App\Http\Controllers;

use App\members;
use Illuminate\Http\Request;

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

    public function member_create()
    {
        return view('member_system.member_create');
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
        if($member->save())
        {
//            return redirect('home');
            var_dump($data);
        }
        else
        {
            return redirect()->back();
        }
    }

}
