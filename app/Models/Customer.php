<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $casts = [
        'date_of_application' => 'date:d-m-Y'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
