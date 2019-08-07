<?php

namespace App\Http\Controllers;

use App\District;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Province;
use App\User;
use App\Village;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    public function getProvince(){
        $provinces = Province::OrderBy('name')->get();
        return $provinces;
    }
    public function getDistrict(Request $request){
        $districts = District::where('provinceid',$request->provinceid)->get();
        return $districts;
    }
    public function getWard(Request $request){
        $wards = Ward::where('districtid',$request->districtid)->get();
        return $wards;
    }
    public function getVillage(Request $request){
        $villages = Village::where('wardid',$request->wardid)->get();
        return $villages;
    }

    public function getHomePage(){
        return view('homepage');
    }
    public function getSeachPage(){
        return view('seach');
    }

    public function postRegister(RegisterRequest $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
            $status = false;
            $message = __('message.register_failed');
            if (User::addUser($input)) {
                $status = true;
                $message = __('message.register_success');
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['status' => true]);
        }
        return response()->json(['status' => false, 'message' => __('message.login_failed')]);
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route(HOME_PAGE);
    }
}
