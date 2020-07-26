<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function RegisterUser(Request $request){

        $this->validate($request, [
            'firstname' => 'required|max:20',
            'lastname' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $table = new User();

        $table->fist_name = $request->input('firstname');
        $table->last_name = $request->input('lastname');
        $table->email = $request->input('email');
        $table->password = bcrypt($request->input('password'));

        $table->save();
        
        return redirect()->back()->with('message', 'Registered Successfully!');

    }
}
