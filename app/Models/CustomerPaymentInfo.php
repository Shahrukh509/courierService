<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPaymentInfo extends Model
{
    use HasFactory;

    protected $fillable = ['id','type','description','business_name','mobile','amount','comments'];



public function add_data($request){

$data = CustomerPaymentInfo::create([
'type' => $request->type,
'description' => $request->description,
'business_name' => $request->business_name,
'mobile' => $request->mobile,
'amount' => $request->amount,
'comments' => $request->comments
 ]);

$data->save();
return $data;
}

public function updates($request){

$data = CustomerPaymentInfo::find($request->id);

$data->update([
'type' => $request->type,
'description' => $request->description,
'business_name' => $request->business_name,
'mobile' => $request->mobile,
'amount' => $request->amount,
'comments' => $request->comments
]);

$data->save();
if($data){
return $data;
}

else{

    return false;
}
}
}
