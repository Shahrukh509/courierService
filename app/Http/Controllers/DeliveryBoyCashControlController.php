<?php

namespace App\Http\Controllers;

use App\Models\DeliveryBoyCashControl;
use App\Models\User;
use Illuminate\Http\Request;

class DeliveryBoyCashControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */


     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = DeliveryBoyCashControl::orderBy('id','desc')->get();
        // print_r($data);exit;

        return view('admin.delivery-boy-cash-collection',compact('data'));
    }

    public function getUserData(){

        $data = User::where('type', 'merchant')->get();
        return view('admin.add-delivery-boy-cash-collection',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // print_r($request['name']);exit;
      $validate =  $request->validate([
    'cash_amount' => 'required|numeric',
    'notes' => 'string',
    'time' => 'date_format:H:i'
]);

      if($validate){

        $delivery_boy_cash_collection = new DeliveryBoyCashControl;
        $delivery_boy_cash_collection = $delivery_boy_cash_collection->add_cash($request);

        if(!empty($delivery_boy_cash_collection)){

        return redirect('delivery-boy-cash-collection')->with('message','Data has been saved !');

        }

        else{

         return redirect('delivery-boy-cash-collection')->with('error','Something went wrong !');   
        }

      }

      else{

        return redirect('add_cash_collection');
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
        // print_r($request->time);exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryBoyCashControl  $deliveryBoyCashControl
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryBoyCashControl $deliveryBoyCashControl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryBoyCashControl  $deliveryBoyCashControl
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        // print_r($request->id);exit;
        $data = DeliveryBoyCashControl::where('id',$request->id)->first();
        $all = DeliveryBoyCashControl::all();

          // print_r($all);exit;
        return view('admin.edit-delivery-boy-cash-collection',compact('data','all'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeliveryBoyCashControl  $deliveryBoyCashControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // print_r($request->id);exit;
         $validate =  $request->validate([
    'cash_amount' => 'required|numeric',
    'notes' => 'string',
    'time' => 'date_format:H:i'
]);
     if($validate){

        $updating_data = new DeliveryBoyCashControl;
        $updating_data = $updating_data->updates($request);

        if($updating_data){

        return redirect('delivery-boy-cash-collection')->with('message','Data has been updated !');

        }

        else{

         return redirect('delivery-boy-cash-collection')->with('error','Something went wrong !');   
        }

      }


      else{

        return redirect('add_cash_collection');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryBoyCashControl  $deliveryBoyCashControl
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryBoyCashControl $deliveryBoyCashControl)
    {
        //
    }
}
