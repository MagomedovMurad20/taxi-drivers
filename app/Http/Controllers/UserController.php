<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->save();
        return redirect()->route('user.index')->with('flash_message', 'User added');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.user', compact('user'));
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->save();
        return view('users.user', compact('user'))->with('flash_message', 'User Updated!');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('flash_message', 'User Deleted!');
    }
}
