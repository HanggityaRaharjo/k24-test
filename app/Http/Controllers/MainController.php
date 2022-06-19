<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function main()
    {
        return view('login.index');
    }
}
// $user = User::where('role', '=', 'user')->get();
//         $userJSON = json_encode($user);
//         $userJSON = json_decode($user);
//         dd($userJSON);