<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    function add(Request $request){
        $userData = new User();
        $userData->name=$request->name;
        $userData->email=$request->email;
        $userData->password=$request->password;
        $userData->role=$request->role;
        $userData->save();
        if($userData){
            return "add the value in database";
        }
    }
}
