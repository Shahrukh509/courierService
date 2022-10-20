<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }


    public function adding(Request $request){

         // print_r($request->profile_image);exit;


       $validate =  $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'string',
            'mobile' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'address' => 'string',
            'name' => 'string',
            'nid_number' => 'numeric',
            'nid_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'license_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vehicle_name' => 'string',
            'vehicle_number' => 'string',
            'district' => 'string',
            'region' => 'string',
            'username' => 'required|string',
            'password' => 'required|min:6'
        ]);

      

       if($request->hasFile('profile_image')){
          $image= $request->file('profile_image');
          $pro_image = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(300, 300)->save( public_path('/images/' . $pro_image ) );

          $request->profile_image = $pro_image;

      }

       // print_r($request->profile_image);exit;
      if($request->hasFile('nid_image')){
          $image= $request->file('profile_image');
          $nid_image = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(300, 300)->save( public_path('/images/' . $nid_image ) );

          $request->nid_image = $nid_image;

      }
      if($request->hasFile('license_image')){
          $image= $request->file('profile_image');
          $lic_image = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(300, 300)->save( public_path('/images/' . $lic_image ) );

          $request->license_image = $lic_image;

      }


        if($validate){

        $data = new User;
        $data= $data->add_delivery_boy($request);

        if($data){

        return redirect('delivery_boy_list')->with('message','Data has been saved !');

        }

        else{

         return redirect('adding_delivery_boy')->with('error','Something went wrong !');   
        }

      }

      else{

        return '<script>alert("something went wrong")</script>' ;
      }


    }


    public function show(){

    $data = User::where('type','boy')->orderBy('id','desc')->get();

    return view('admin.view_delivery_boy_list',compact('data'));

    }

    public function edit(Request $request){

        // print_r($request->id);exit;

         $data = User::where('id',$request->id)->first();
        $all = User::where('type','boy')->get();

       // print_r($all[0]['region']);exit;
        return view('admin.edit-delivery-boy',compact('data','all'));


    }


    public function updating(Request $request){
// print_r($request->assigned_region);exit;
    $user = new User;

    $user = $user->updatingg($request);

    if($user == true){

     return redirect('delivery_boy_list')->with('message','Data has been updated');
    }

else{

     return redirect('delivery_boy_list')->with('message','Data has been updated');
}

    }


    public function delete(Request $request){

    $data = User::find($request->id);
    $data->delete();

    if($data){

     return redirect('delivery_boy_list')->with('error','Data has been  deleted');
    }

else{

    return redirect('delivery_boy_list')->with('error','Data not  deleted');
}


}    
}


