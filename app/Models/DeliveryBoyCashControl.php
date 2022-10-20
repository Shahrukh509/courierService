<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DeliveryBoyCashControl extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id','time','username','notes','cash_amount'];




    public function add_cash($request){

        $user = User::where('id',$request->user_id)->first();

    $data = DeliveryBoyCashControl::create([

        'user_id' => $request->user_id,
        'username' => $user->name,
        'cash_amount' => $request->cash_amount,
        'notes' => $request->notes,
        'time' => $request->time
    ]);

    $data->save();

    return $data;



    }

public function updates($request){

    $username = DeliveryBoyCashControl::where('id',$request->id)->first();

     $username = $username->username;

    $user= User::where('id', $request->user_id)->first();

    // print_r($request->user_id);exit;

     $data = DeliveryBoyCashControl::find($request->id);

    $data->update([
        
        'user_id' => $user->id,
        'username' => $user->name,
        'cash_amount' => $request->cash_amount,
        'notes' => $request->notes,
        'time' => $request->time
    ]);

    $data->save();

    if($data == true){

    return $data;
}

else{

    return false;
}


    }
    
}
