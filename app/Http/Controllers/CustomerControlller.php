<?php

namespace App\Http\Controllers;

use App\Address;
use App\CustomerRate;
use App\ReportCustomer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerControlller extends Controller
{
    public function addCustomerAddress(Request $request){
        return view('Pages.addCustomerAddress')->with('product_id',$request->product_id);
    }
    public function saveCustomerAddress(Request $request){
        $customerAddress = new Address($request->all());
        $customerAddress->save();
        return redirect('confirm-buy/'.$request->product_id);

    }
    public function rateCustomer(){
        $rates = CustomerRate::where('active',0)->get();
        return view('admin.customer-rate.active-rate')->with('rates',$rates);
    }
    public function rateCustomerActived(){
        $rates = CustomerRate::where('active',1)->get();
        return view('admin.customer-rate.list-rate')->with('rates',$rates);
    }
    public function activeRateCustomer(Request $request){
        $checked = $request->checked;
        foreach($checked as $ck) {
            $rate = CustomerRate::find($ck);
            $rate->active = 1;
            $rate->save();
        }
        return "success";
    }
    public function reportCustomer(Request $request){
//        $report = ReportCustomer::where('customer_report_id',$request->customer_id)->get();
        ReportCustomer::create($request->all());
        return 'success';
    }
    public function reportList(){
        $reports = ReportCustomer::where('active',1)->paginate(10);
        return view('admin.customer-rate.report-list')->with('reports',$reports);
    }
    public function activeReport(){

    }
    public function reportListActive(){
        $reports = ReportCustomer::where('active',0)->orderBy('created_at','DESC')->paginate(10);
        return view('admin.customer-rate.report-active')->with('reports',$reports);
    }
}
