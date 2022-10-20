<?php

namespace App\Http\Controllers;

use App\Models\RouteSetup;
use App\Models\Parcel;
use App\Models\User;

use Illuminate\Http\Request;

class RouteSetupController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function parcel_route(){
         $parcel = Parcel::all();
        $merchant = User::where('type','merchant')->get();
        $boy = User::where('type','boy')->get();
        $route = RouteSetup::orderBy('id','desc')->get();
        // $route_setup = "";
        // if(isset($route) && $route != null){
        foreach($route as $rit){

            $route_setup = json_decode($rit->route);
        }

    // } 

        // print_r($route_setup);exit;

        

        return view('admin.parcel-route-setup',compact('route','route_setup','parcel','merchant','boy'));


        
        // return view('admin.parcel-route-setup',compact('parcel','merchant','boy'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
        // print_r($request->user_id);exit;
        $data = RouteSetup::create([
            'user_id' => $request->user_id,
            'pickup_district' => $request->pickup_district,
            'pickup_region' => $request->pickup_region,
            'drop_district' => $request->drop_district,
            'drop_region' => $request->drop_region,
            'route' => json_encode($request->route_name)
        ]);



       

        // print_r($route_setup);exit;

        if($data != null){

        //      $parcel = Parcel::all();
        // $merchant = User::where('type','merchant')->get();
        // $boy = User::where('type','boy')->get();

        // $route = RouteSetup::all();

        // $route = RouteSetup::orderBy('id','desc')->get();
        // foreach($route as $rit){

        //     $route_setup = json_decode($rit->route);
        // }

        // // return view('admin.parcel-route-setup',compact('route','route_setup','parcel','merchant','boy'));
        return redirect('parcel-route');


        }

        else{
      
       return redirect('admin.parcel-route-setup')->with('error','Something Went Wrong');

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
     * @param  \App\Models\RouteSetup  $routeSetup
     * @return \Illuminate\Http\Response
     */
    public function show(RouteSetup $routeSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RouteSetup  $routeSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(RouteSetup $routeSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RouteSetup  $routeSetup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RouteSetup $routeSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RouteSetup  $routeSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // print_r($request->id);exit;
        $data = RouteSetup::where('id',$request->id)->first();

        $data->delete();

    if($data){

     return redirect('parcel-route')->with('error','Data has been  deleted');
    }

else{

    return redirect('parcel-route')->with('error','Data not  deleted');
}
    }
}
