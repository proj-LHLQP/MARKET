<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\District;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Province;
use App\Village;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function postRegister(RegisterRequest $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
            $status = false;
            $message = __('message.register_failed');
            if (Customer::addCustomer($input)) {
                $status = true;
                $message = __('message.register_success');
                Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password]);
            }
            return response()->json(['status' => $status, 'message' => $message]);
        }
    }

    public function postLogin(LoginRequest $request)
    {
//        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//            return response()->json(['status' => true]);
//        }
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['status' => true]);
        }
        return response()->json(['status' => false, 'message' => __('message.login_failed')]);
    }
    public function postLoginPage(Request $request){
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['status' => true]);
        }
        return redirect('/login');
    }
    public function getLogout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route(HOME_PAGE);
    }

//    public function testMail(){
//        $data =['name'=>'QUANG','messages'=>'Đăng kí tài khoản thành công'];
//        Mail::send('Email.mail-content',$data,function ($message){
//            $message->to('nmquang21@gmail.com')->subject('Market2nd Feedback!');
//        });
//        return 'OK';
//    }
}
