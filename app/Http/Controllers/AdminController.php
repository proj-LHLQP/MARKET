<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getDashboard(){
        return view('admin.dashboard');
    }
    public function test(Request $request){
        return $request;
    }
}
