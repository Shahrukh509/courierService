<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteSetup extends Model
{
    use HasFactory;

     protected $fillable = ['id','user_id','pickup_district','pickup_region','drop_region','drop_district','route'];
}
