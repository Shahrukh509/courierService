<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Parcel extends Model
{
    use HasFactory;

    protected $table = 'parcels';


    public function user(){


        return $this->belongsTo(User::class);
    }

    public function deliveryboy(){


        return $this->belongsTo(User::class,'delivery_boy_id','id');
    }

}
