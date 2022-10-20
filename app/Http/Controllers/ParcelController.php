<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\User;
// use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Session;

class ParcelController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
            return view('user.add-parcel');

    }
    public function create(Request $request)
    {
        $parcel = new Parcel;
        $parcel->tracking_id = $request->parcel_id;
        $parcel->name = $request->parcel_name;
        $parcel->phone = $request->parcel_phone;
        $parcel->amount = $request->parcel_amount;
        $parcel->email = $request->parcel_email;
        $parcel->district = $request->parcel_district;
        $parcel->region = $request->parcel_region;
        $parcel->address = $request->parcel_address;
        $parcel->note = $request->parcel_note;
        $parcel->user_id = Auth::user()->id;

        if($parcel->save()){
            Session::flash('success', 'Parcel has been added successfully.'); 
            return redirect(route('view_parcel'));
           }
        Session::flash('error', 'Something went wrong during parcel request, Please try again.'); 
        return redirect(route('view_parcel'));  

    }

    public function viewParcel()
    {
        $parcels = Parcel::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('user.view-parcel',compact('parcels'));

    }

    public function viewAllParcel()

    {
        if(Auth::user()->type == 'admin'){

        // $data = Parcel::orderBy('id', 'desc')->user;
        $data = Parcel::with('user','deliveryboy')->get();

        // $boy_name = DB::table('parcels')->join('users','parcels.delivery_boy_id','=','users.id')->select('users.name')->get();

             // print_r($data[0]['deliveryboy']->name);exit;
       

        return view('admin.view-all-parcel',compact('data'));
    }

    if(Auth::user()->type == 'merchant'){

         $data = Parcel::where('user_id',Auth::user()->id)->get();

         // print_r($data);exit;


       return view('user.view-all-parcel',compact('data'));



    }

    if(Auth::user()->type == 'boy'){

         // $data = Parcel::where([
         //    'status' => 0,
         //    'delivery_boy_id' => Null])->get();

        $data = Parcel::all();

         // print_r($data);exit;


       return view('delivery-boy.order',compact('data'));



    }

    }


    public function show(Request $request){

      if(Auth::user()->type == 'admin'){
        $data = Parcel::with('user')->where('id',$request->id)->first();
        $user = User::where('type','merchant')->get();
      
      // print_r($data);exit;
       
        return view('admin.edit-parcel',compact('data','user'));
    }

    if(Auth::user()->type == 'merchant'){
 
      $data = Parcel::where('id',$request->id)->first();  

        // print_r($data);exit;

        return view('user.edit-parcel',compact('data'));

    }
    }


    public function update(Request $request){


    if(Auth::user()->type == 'admin'){

    $data = Parcel::where('id',$request->id)->first();

    $data->amount = $request->amount;
    $data->user_id = $request->user_id;
    $data->note = $request->note;
    if($request->status == 0 ){
    $data->status = $request->status;
    $data->delivery_boy_id = Null;
   }

// print_r($request->status);exit; 
    $data->save();


     if($data){

        return redirect('view-all-parcel')->with('message','Parcel has been updated');
    }

    else{
        return redirect('view-all-parcel')->with('error','Parcel not updated');
    }
}


if(Auth::user()->type == 'merchant'){

$data = Parcel::find($request->id);

    $data->amount = $request->amount;
    $data->phone = $request->phone;
    $data->email = $request->email;
    $data->district = $request->district;
    $data->region = $request->region;
    $data->name = $request->name;
    $data->phone = $request->phone;
    $data->note = $request->note;

    $data->save();


     if($data){

        return redirect('view-all-parcel')->with('message','Parcel has been updated');
    }

    else{
        return redirect('view-all-parcel')->with('error','Parcel not updated');
    }

}
    }


    public function destroy(request $request){

         // print_r($request->id);exit;
        $data = Parcel::where('user_id',$request->id)->first();

        $data->delete();
        if($data){

  return redirect('view-all-parcel')->with('message','Parcel has been deleted');
        }
        else{
     
      return redirect('view-all-parcel')->with('error','Parcel not deleted');
    }

        }


    public function DeliveryBoyParcelStatus($id,$status){
      

     $data = Parcel::where('id',$id)->first();
     
     $data->delivery_boy_id = Auth::user()->id;
     $data->status = $status;

     $data->save();
     
     if($data){

        return redirect('view-all-parcel');
     }

     else{

        return '<script>alert("Sorry Parcel was not accepted")</script>';
     }

    
      }
     }     // print_r($data->delivery_boy_id);exit;

