<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerControlller extends Controller
{
    public function reportCustomer(Request $request){
    }
    public function addCustomerAddress(Request $request){
        return view('Pages.addCustomerAddress')->with('product_id',$request->product_id);
    }
    public function saveCustomerAddress(Request $request){
        $customerAddress = new Address($request->all());
        $customerAddress->save();
        return redirect('confirm-buy/'.$request->product_id);

    }
}
