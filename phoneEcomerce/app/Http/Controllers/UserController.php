<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view("admin.users.create");
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->email);
        $user->type = $request->type;

        $user->save();

        session()->flash("success", "Insert Successfully");
        return redirect('users/index');
    }

      public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->type = $request->type;
        $user->save();
        session()->flash("success", "Update Successfully");
         return back();
    }

     public function destroy($id, Request $request)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash("success", "Delete successfully");
        return back();
    }


}
