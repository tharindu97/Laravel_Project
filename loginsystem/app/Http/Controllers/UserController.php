<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $username = 'vihanga';
        //return view('users', [ 'username' => $username ]);
        //return view('users', compact('username'));
        return view('users')->with('user', $username);
    }
}
