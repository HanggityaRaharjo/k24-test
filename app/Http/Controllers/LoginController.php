<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function validHandler(Request $request)
    {
        $validatedData = $request->validate
        ([
        'email' => 'required|email',
        'password' => 'required|min:5|max:255'
        ]);
        if(Auth::attempt(['email' => $request->email,'password' => $request->password]))
        {
            if(Auth::user()->role=='admin')
            {
                return redirect('/admin');
            }
            else if(Auth::user()->role=='user')
            {
                return redirect("/user");
            }
        }else
        {
            return back();
        }
    }
}