<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function jsondata()
    {
        $user = User::all();
        $userJSON = json_encode($user);

        return response() -> json($userJSON);
    }

    public function index()
    {
        $user = User::where('role', 'user')->get();
        return view('admin.dashboard',compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.edit', compact(['user']));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();
        return redirect("/admin");
    }

    
}
