<?php

namespace App\Http\Controllers;

use App\Models\CustomerPaymentInfo;
use Illuminate\Http\Request;

class CustomerPaymentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $data = CustomerPaymentInfo::all();
        return view('admin.customer_pay_info',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

     // print_r($request->amount);exit;
      $validate =  $request->validate([
    'type' => 'required|string',
    'description' => 'string',
    'business_name' => 'string',
    'mobile' =>'required|numeric',
    'amount' => 'required|numeric',
    'comments' => 'string'
]);

      if($validate){

        $data = new CustomerPaymentInfo;
        $data = $data->add_data($request);

        if(!empty($data)){

        return redirect('customer_payment')->with('message','Data has been created !');

        }

        else{

         return redirect('show_add_page')->with('error','Something went wrong !');   
        }

      }

      else{

        return redirect('customer_payment');
      }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerPaymentInfo  $customerPaymentInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerPaymentInfo $customerPaymentInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerPaymentInfo  $customerPaymentInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = CustomerPaymentInfo::where('id',$request->id)->first();

        // print_r($data);exit;

        return view('admin.edit-cust-pay-info',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerPaymentInfo  $customerPaymentInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // print_r($request->id);exit;
         $validate =  $request->validate([
            'type' => 'required|string',
    'description' => 'string',
    'business_name' => 'string',
    'mobile' =>'required|numeric',
    'amount' => 'required|numeric',
    'comments' => 'string'
    
]);
     if($validate){

        $data = new CustomerPaymentInfo;
        $data = $data->updates($request);

        if($data){

        return redirect('customer_payment')->with('message','Data has been updated !');

        }

        else{

         return redirect('edit-cust-pay-info')->with('error','Something went wrong !');   
        }

      }


      else{

        return redirect('edit-cust-pay-info');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerPaymentInfo  $customerPaymentInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = CustomerPaymentInfo::find($request->id);

        $data->delete();

        
    if($data){

     return redirect('customer_payment')->with('error','Data has been  deleted');
    }

else{

    return redirect('customer_payment')->with('error','Data not  deleted');
}

    }
}
