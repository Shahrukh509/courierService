<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable  
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email',
        'user_email',
        'address',
        'profile_image',
        'nid_number',
        'nid_picture',
        'vehical_name',
        'vehical_number',
        'district',
        'region',
        'driving_license_picture',
        'assigned_region',
        'assigned_district',
        'mobile',
        'status',
        'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customers(){
        return $this->hasMany(Customer::class);
    }


    public function parcel(){
    
    return $this->hasMany(Parcel::class,'id','user_id');

    }

    


    public function add_delivery_boy($request){

    $data = User::create([
    'email' => $request->username,
    'user_email' => $request->email,
    'password' => Hash::make($request->password),
    'name' => $request->name,
    'mobile' => $request->mobile,
    'address' => $request->address,
    'district' => $request->district,
    'region' => $request->region,
    'profile_image' => $request->profile_image,
    'nid_number' => $request->nid_number,
    'nid_picture' => $request->nid_image,
    'driving_license_picture' => $request->license_image,
    'nid_number' => $request->nid_number,
    'vehical_name' => $request->vehicle_name,
    'vehical_number' => $request->vehicle_number,
    'status' => $request->status,
    'type' => 'boy'
]);

$data ->save();

return $data;

    }


    public function updatingg($request){
        // print_r($request);exit;
    $user = User::find($request->id);



    $user->update([
    'name' => $request->name,
    'email' => $request->email,
     'vehical_name' => $request->vehicle_name,
     'mobile' => $request->mobile,
     'assigned_district' => $request->assigned_district,
     'assigned_region' => $request->assigned_region

    ]);

    $user->save();
    return $user;
   
}
}
