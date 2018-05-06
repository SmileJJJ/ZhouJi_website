<?php

namespace App\Http\Controllers;

use App\members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

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
            Log::info('提交到增加');
            //2.validator类验证
            $validator=\Validator::make($request->input(),[
                'members.姓名'=>'required|min:1|max:4',
                'members.出生年月日'=>'required|min:10|max:10',
                'members.邮箱'=>'required|min:8|max:18',
                'members.学历'=>'required|max:4',
                'members.联系方式'=>'required|min:11|max:11',
                'members.身份证'=>'required|min:18|max:18',
                'members.性别'=>'required|integer',
            ],[
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度不符合要求',
                'max'=>':attribute 长度不符合要求',
                'integer'=>':attribute 必须为整数',
            ],[
                'members.姓名'=>'姓名',
                'members.出生年月日'=>'出生日期',
                'members.邮箱'=>'邮箱',
                'members.学历'=>'学历',
                'members.联系方式'=>'联系方式',
                'members.身份证'=>'身份证',
                'members.性别'=>'性别',
            ]);

            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
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

    public function member_update(Request $request,$id)
    {
        $member=members::find($id);
        if($request->ismethod('POST'))
        {
            Log::info('提交到更改');
            //2.validator类验证
            $validator=\Validator::make($request->input(),[
                'members.姓名'=>'required|min:1|max:4',
                'members.出生年月日'=>'required|min:10|max:10',
                'members.邮箱'=>'required|min:8',
                'members.学历'=>'required',
                'members.联系方式'=>'required|min:11|max:11',
                'members.身份证'=>'required|min:18|max:18',
                'members.性别'=>'required|integer',
            ],[
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度不符合要求',
                'max'=>':attribute 长度不符合要求',
                'integer'=>':attribute 必须为整数',
            ],[
                'members.姓名'=>'姓名',
                'members.出生年月日'=>'出生日期',
                'members.邮箱'=>'邮箱',
                'members.学历'=>'学历',
                'members.联系方式'=>'联系方式',
                'members.身份证'=>'身份证',
                'members.性别'=>'性别',
            ]);

            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data=$request->input('members');
//            $member->姓名=$data['姓名'];
//            $member->出生年月日=$data['出生年月日'];
//            $member->邮箱=$data['邮箱'];
//            $member->学历=$data['学历'];
//            $member->联系方式=$data['联系方式'];
//            $member->身份证=$data['身份证'];
//            $member->性别=$data['性别'];

            if( members::where('ID','=',$member->ID)->update($data))
            {
                return redirect('home')->with('success','修改成功-'.$id);
            }
//            if($member->save())
//            {
//                return redirect('home')->with('success','修改成功-'.$id);
//            }
        }
        return view('member_system.member_update',[
            'member'=>$member,
        ]);
    }

    public function member_detail($id)
    {
        $member=members::find($id);
        return view('member_system.member_detail',[
            'member'=>$member,
        ]);
    }

    public function member_delete($id)
    {
        $member=members::find($id);
        $name=$member->姓名;
//        dd($member);exit();
        if(members::where('ID','=',$member->ID)->delete())
        {
            return redirect('home')->with('success','删除成功-'.$name);
        }
        else
        {
            return redirect('home')->with('error','删除失败-'.$name);
        }
//        if($member->delete())
//        {
//            return redirect('home')->with('success','删除成功-'.$name);
//        }
//        else
//        {
//            return redirect('home')->with('error','删除失败-'.$name);
//        }
    }

    public function member_test()
    {
//        $members=members::all();
//        dd($members);

//        $num=members::where('ID','>',8)->update(
//            ['姓名'=>'天啊']
//        );
//        var_dump($num);


        $student=members::find(10);

        try
        {
            $student->delete();
        }
        catch (\Exception $exception)
        {
//            dd($exception);
            echo $exception->getMessage();
        }
//        $bool=$student->delete();
//        dd($bool);
//        $num=members::where('ID','>',15)->delete();
//        dd($num);
    }

}
