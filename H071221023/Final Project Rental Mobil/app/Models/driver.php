<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'armada_id',
        'name',
        'phone',
        'status'
    ];

    public function armada() {
        return $this->hasOne(Armada::class, 'id' ,'armada_id');
    }
}
