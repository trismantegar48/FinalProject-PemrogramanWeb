<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'name',
        'price',
        'plat',
        'picture_url',
        'transmission',
        'plat',
        'user_id',
    ];

    public function latestTransaction(){
        return $this->hasOne(transaction::class, 'transaction_id','id')->latestOfMany();
    }

    public function getUser() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // public function driver() {
    //     return $this->hasOne(::class, 'driver_id', 'id');
    // }


}
