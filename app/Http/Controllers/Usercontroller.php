<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

use function Laravel\Prompts\alert;

class Usercontroller extends Controller
{
    function addUser(Request $request)
    {
        $userData = new User();
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->password = $request->password;
        $userData->role = $request->role;

        $userData->save();
        if ($userData) {
            return redirect('/user');
        }
    }
    public function listUser()
    {
        $listData = User::all();
        return view('Users', ['listing' => $listData]);
    }

    public  function destroy(string $id)
    {
        $userData = User::findOrFail($id);
        $userData->delete();
        alert("are you delete this user?");
        return redirect('/user');
    }
    public function update(Request $request, $id){
     return $id;
    }
}
