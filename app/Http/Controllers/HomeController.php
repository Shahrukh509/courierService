<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\User;
use Session;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->type == 'boy') {

            return redirect('view-all-parcel');

        }else if(Auth::user()->type == 'merchant'){
            $totalParcel = Parcel::where('user_id',Auth::user()->id)->count();
            $totalAmount = Parcel::where('user_id',Auth::user()->id)->sum('amount');
            return view('user.dashboard',compact('totalParcel','totalAmount'));

        }else if(Auth::user()->type == 'admin'){
            $totalParcel = Parcel::count();
            $totalAmount = Parcel::sum('amount');
            $totalMerchant = User::where('type','merchant')->count();
            return view('admin.admin-dashboard',compact('totalParcel','totalAmount','totalMerchant'));

        }
    }
}
