<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

use function Laravel\Prompts\alert;

class Usercontroller extends Controller
{
    //function for add user data 
    function addUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);
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

    //function for show user list 
    public function listUser()
    {
        $listData = User::paginate(5);
        return view('Users', ['listing' => $listData]);
    }

    //function for delete user  
    public  function destroy(string $id)
    {
        $userData = User::findOrFail($id);
        $userData->delete();
        alert("are you delete this user?");
        return redirect('/user');
    }

    //function for edit user data 
    public function edit($id){
        $user = User::find($id);
        return view('editUser',['showData' => $user]);
    }

    //function for update user data 
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        
        if ($user->save()) {
            return redirect('/user');
        }
        else{
            return "update operation failed";
        }
    }

    //function for search user data 
     public function search(Request $request,){
        // return $request;
        $searchUser = User::where('name','like',"%$request->search%")->paginate(5);
        return view('Users',['listing'=>$searchUser,'search'=>$request->search]);
     }
}
