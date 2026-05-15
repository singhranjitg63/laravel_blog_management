<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Users\CreateUserRequest;
use App\Models\User;
use function Laravel\Prompts\alert;

class UsersController extends Controller
{
    //function for add user data 
    function store(CreateUserRequest $request)
    {
        try {
            \DB::beginTransaction();
            $userData = new User();
            $userData->name = $request->name;
            $userData->email = $request->email;
            $userData->password = $request->password;
            $userData->role = $request->role;

            if (!$userData->save()) {
                throw new \Exception("User has not been created. please try again later", 422);
                
            }
            \DB::commit();
            return redirect()->route('users.index');
        } catch (\Throwable $th) {
            \DB::rollback();
            dd($th);
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    //function for show user list 
    public function index(Request $request)
    {
        $builder = User::query();
        if($request->has('keyword') && $request->input('keyword')) {
            $builder = $builder->where('name', 'LIKE' , '%'.$request->input('keyword').'%');
        }
        $items = $builder->paginate(5);
        return view('users.index', ['items' => $items]);
    }

    public function create()
    {
        return view('users.create');
    }

    //function for delete user  
    public  function destroy(string $id)
    {
        $userData = User::findOrFail($id);
        $userData->delete();
        alert("are you delete this user?");
        return redirect()->route('users.index');
    }

    //function for edit user data 
    public function edit($id){
        $user = User::find($id);
        return view('users.edit',['item' => $user]);
    }

    //function for update user data 
    public function update($id, Request $request){
        try {
            \DB::beginTransaction();
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            
            if (!$user->save()) {
                throw new \Exception("User has not been updated. Please try again later", 422);
            }
            \DB::commit();
            return redirect()->route('users.index');
        } catch (\Throwable $th) {
            \DB::rollback();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
