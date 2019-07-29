<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getDashboard(){
        return view('Admin.dashboard');
    }
    public function getListUser(Request $request){
        $users = User::all();
        return view('Admin.user.listUsers')->with('datas',$users);
    }
    public function editUser(Request $request){
        $id=$request->id;
        $user = User::find($id);
        return view('Admin.user.edit-user')->with('user',$user);
    }
    public function saveUser(Request $request){
        //DEMO

        $id=$request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
        return redirect('admin/list-users')->with('message-success','Edit user success!!!');
    }
}
