<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255'
        ]);

    $image = $request->file('image');
    $name = time().$image->getClientOriginalName();
    $Path = public_path('/img');
    $image->move($Path, $name);

        $data = User::create([
            'role' => 'user',
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'gender' => $request->gender,
            'ktp' => $request->ktp,
            'image' => $name

        ]);
        return redirect('/');
    }
}
