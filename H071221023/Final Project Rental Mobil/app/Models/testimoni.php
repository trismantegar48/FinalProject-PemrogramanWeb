<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'car_name',
        'message'
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id' );
    }
}
