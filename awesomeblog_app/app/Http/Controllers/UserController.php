<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index($id = null)
    {
        $user = User::select(['id', 'email', 'first_name', 'last_name'])
            ->where('id', $id ?: Auth::id())
            ->with(['microposts' => function ($query) {
                $query->orderBy('microposts.created_at', 'desc');
            }])
            ->withCount(['microposts', 'followers', 'following'])
            ->first();
        return view('user.home', compact('user'));
    }

    public function list()
    {
        $users = User::select(['id', 'first_name', 'last_name'])->get();

        return view('user.list', compact('users'));
    }

    public function following($id)
    {
        $user = User::find($id);
        $users = $user->following()->get();
        return view('user.following', compact('users', 'user'));
    }

    public function followers($id)
    {
        $user = User::find($id);
        $users = $user->followers()->get();
        return view('user.followers', compact('users', 'user'));
    }

    public function follow($followed_id)
    {
        $followed_user = User::find($followed_id);
        Auth::user()->following()->attach($followed_user);
        return back();
    }

    public function unfollow($id)
    {
        $followed_user = User::find($id);
        Auth::user()->following()->detach($followed_user);

        return back();
    }

    public function update(UserRequest $request, $id)
    {
        $validated = $request->validated();
        if (Auth::id() != $id) {
            return back();
        }

        Auth::user()->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            // 'email' => $validated['email'],
            // 'password' => Hash::make($validated['password']),
        ]);

        return redirect('/home');
    }
}
