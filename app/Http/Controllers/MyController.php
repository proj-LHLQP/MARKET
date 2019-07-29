<?php

namespace App\Http\Controllers;

use App\District;
use App\Province;
use App\Village;
use App\Ward;
use Illuminate\Http\Request;

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
}
