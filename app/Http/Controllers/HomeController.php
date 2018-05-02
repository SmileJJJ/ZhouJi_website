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


}
