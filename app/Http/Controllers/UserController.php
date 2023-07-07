<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('dashboard', [
            "title" => "Dashboard",
            "users" => $users
        ]);
    }    

    public function create()
    {
        return view('create', [
            "title" => "Create"
    ]);
    }

    public function store(Request $request)
    {
        // Validate and store the new user
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/dashboard')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $title = 'Update'; 
        return view('update', compact('user', 'title'));
    }
    

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/dashboard')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/dashboard')->with('success', 'User deleted successfully');
    }
}

