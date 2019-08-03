<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        $roles = DB::table('roles')->where('name','<>','admin')->get();
        return view('admin.user.listUsers')->with(['datas'=>$users,'roles'=>$roles]);
    }

    public function store(Request $request){
        $roleID = $request->roles;


        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->avatar = 'avatar';
        $user->password = 'Phong123@';
        $user->assignRole($roleID);


        foreach ($roleID as $rid){
            $roleGeted = Role::findById($rid);
            $user->givePermissionTo($roleGeted->permissions);
        }
//        dd($user);


        $user->save();
        return redirect(route('admin.user.index'));
    }


    public function edit($id){
        $user = User::find($id);
        $roles = DB::table('roles')->where('name','<>','admin')->get();
        //Lay role cua user co id nay
        $roleOfUser = DB::table('model_has_roles')->where('model_id',$id)->get();
        $idRoleSelected = [];
        foreach ($roleOfUser as $i){
            $idRoleSelected[]= $i->role_id;
        }
//        dd($idRoleSelected);
//        dd($roles[0]->name);
        return view('admin.user.edit-user')->with(['user'=>$user,'roles'=>$roles,'idRoleSelected'=>$idRoleSelected]);
    }


    public function update(Request $request,$id){
        $user = User::find($id);
        if (isset($user)){

            $roleID = $request->roles;

            $user->email = $request->email;
            $user->name = $request->name;
            $user->avatar = 'avatar';
            $user->syncRoles($roleID);

            foreach ($roleID as $rid){
                $roleGeted = Role::findById($rid);
                $user->givePermissionTo($roleGeted->permissions);
            }
//        dd($user);


            $user->save();
            return redirect(route('admin.user.index'));
        }


    }

    public function destroy($id){
//        dd($id);
        $userDelete = User::find($id);
        $userDelete->syncRoles([]);
        $userDelete->givePermissionTo([]);
        $userDelete->delete();
        return redirect(route('admin.user.index'));
    }

}
