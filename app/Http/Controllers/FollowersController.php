<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        $this->authorize('follow', $user);

        if (!Auth::user()->isFollowing($user->id)) {
            Auth::user()->follow($user->id);
            session()->flash('success', '关注成功!');
        }

        return redirect()->route('users.show', $user->id);
    }

    public function destroy(User $user)
    {
        $this->authorize('follow', $user);
        if(Auth::user()->isFollowing($user->id)) {
            Auth::user()->unfollow($user->id);
            session()->flash('info', '取关成功！');
        }

        return redirect()->route('users.show', $user->id);
    }
}
