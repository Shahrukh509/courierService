<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->type == 'boy') {

            $route = RouteSetup::where('user_id',Auth::user()->id)->first();

            return view('delivery-boy.order');

        }else{
            abort(404);
        }
    }
}
