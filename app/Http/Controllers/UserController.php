<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\AUth;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {   
        $user = User::where('id', Auth::id())->first();
        return view('user.user', compact(['user']));
    }

    public function datamember()
    {
        
        $user = User::where('role', '=', 'user')->get();
        return view('user.datamember', compact(['user']));
    }
    
    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact(['user']));
    }
    
    public function update(Request $request, $id){
        $user = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255'
        ]);

        $image = $request->file('image');
        $name = time().$image->getClientOriginalName();
        $Path = public_path('/img');
        $image->move($Path, $name);

        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->date = $request->date;
        $user->gender = $request->gender;
        $user->ktp = $request->ktp;
        $user->image = $name;
        $user->save();
        return redirect('/user');
    }

    
}
