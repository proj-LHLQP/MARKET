<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as ModelOrigin;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){
        $roles = ModelOrigin::all();
//        dd($role);
        return view('admin.role.index')->with(['allRole'=>$roles]);
    }

    public function edit($id){
        $role = ModelOrigin::findById($id);
        $permissions = $role->permissions;
        $allPermit = Permission::all();
//        dd($allPermit);
        $allNamePermit = [];
        foreach ($permissions as $p){
            $allNamePermit[] = $p->name;
        }
//        dd($allNamePermit);
        return view('admin.role.edit-role')->with(['allNamePermit'=>$allNamePermit,'allPermit'=>$allPermit,'role'=>$role]);
//        return view('admin.role.edit-role',compact(['permissions','role']));
    }

    public function store(Request $request, Role $role){
        dd($role);
    }
}
