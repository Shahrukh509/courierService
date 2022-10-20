<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class MerchantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function create(Request $request)
    {
        
        $user = new User;
        $user->email = $request->username;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->user_email = $request->user_email;
        $user->bussiness_name = $request->bussiness_name;
        $user->fb_page_link = $request->fb_page_link;
        $user->address = $request->address;
        $user->district = $request->district;
        $user->region =  $request->region;
        $user->type = "merchant";
        $user->status = 0;

        if($user->save()){


            Session::flash('success', 'Merchant has been created successfully.Using own credential for login to system'); 
            return redirect(route('login'));
           }
        Session::flash('error', 'Something went wrong during merchant signup, Please try again.'); 
        return redirect(route('login'));  
    }

    public function viewAllMerchant()
    {
        $merchants = User::where('type','merchant')->orderBy('created_at','desc')->get();
        return view('admin.view-all-merchant',compact('merchants'));

    }


    public function edit(Request $request){

    $data = User::where(['id' => $request->id,'type' => 'merchant'])->orderBy('created_at','desc')->first();

    // print_r($data);exit;


       return view('admin.edit-merchant',compact('data'));   
    }


    public function update(Request $request){

        // print_r($request->business_name);

    $data =  User::find($request->id);
    // $data->update([

        $data->bussiness_name = $request->business_name;
        $data->fb_page_link = $request->fb_page_name;
        $data->mobile       = $request->mobile;
        $data->district     = $request->district;
        $data->region       = $request->region;
        $data->status       =  $request->status;
          // ]);

    $data->save();
    if($data){

        return redirect('view-all-merchants')->with('message','Merchant has been updated');
    }

    else{
        return redirect('view-all-merchants')->with('error','Merchant not updated');
    }
    }


    public function create_merchant_from_panel(Request $request){
        $user = new User;
        $user->email = $request->username;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->user_email = $request->user_email;
        $user->bussiness_name = $request->bussiness_name;
        $user->fb_page_link = $request->fb_page_link;
        $user->address = $request->address;
        $user->district = $request->district;
        $user->region =  $request->region;
        $user->status = $request->status;
        $user->type = "merchant";

        if($user->save()){
        return redirect('view-all-merchants')->with('message','Merchant has been created');
    }

    else{
        return redirect('view-all-merchants')->with('error','Merchant not created');
    }
}


public function destroy(Request $request){

    $data = User::find($request->id);
    $data->delete();
    if($data){
     return redirect('view-all-merchants')->with('message','Merchant has been deleted');
    }

    else{

     return redirect('view-all-merchants')->with('error','Merchant not deleted');
    }
}

}
