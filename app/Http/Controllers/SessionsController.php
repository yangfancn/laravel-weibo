<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest',[
            'only'=> ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email'=> 'required|email|max:255',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials, $request->has('remember'))){
            if (Auth::user()->actived) {
                session()->flash('success', '欢迎回来！');
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('您还未完成注册，请检查邮箱中的注册邮件进行激活。');
                return redirect()->route('home');
            }
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配！');
            return redirect()->back()->withInput();
        }

    }

    public function destory()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}
