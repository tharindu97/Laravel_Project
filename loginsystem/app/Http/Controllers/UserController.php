<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        
        //return view('users', [ 'username' => $username ]);
        //return view('users', compact('username'));
        //return view('users')->with('user', $username);
        return view('users');
    }

    public function StoreData(Request $request){
        User::create($request -> all());
        return 'User Regitered';
    }
}
