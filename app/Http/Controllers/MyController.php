<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function getCate(){
        $cates = Category::where('parent_id',0)->get();
        return $cates;
    }

    public function getCateChild(Request $request){
        $cate_parentId = $request->category;
        $list = Category::where('parent_id',$cate_parentId)->get();
        return $list;
    }

    public function getHomePage(){
        return view('homepage');
    }
    public function getSeachPage(){
        return view('seach');
    }

    public function getRegister()
    {
        return view('Pages.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        if (User::addUser($input)) {
            session()->flash(SUCCESS, __('message.register_success'));
            return redirect()->route(CLIENT_REGISTER)->withInput();
        } else {
            session()->flash(ERROR, __('message.register_failed'));
            return redirect()->back()->withInput();
        }
    }

    public function getLogin()
    {
        return view('Pages.login');
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route(HOME_PAGE)->withInput();
        }
        session()->flash(ERROR, __('message.login_failed'));
        return redirect()->back()->withInput();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route(CLIENT_LOGIN);
    }
}
