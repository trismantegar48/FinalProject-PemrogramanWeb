<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Carbon\Carbon;

class transaction extends Model
{
    use HasFactory;
    use AutoNumberTrait;
    protected $fillable = [
        'armada_id',
        'user_id',
        'fullname',
        'bookingcode',
        'start_date',
        'end_date',
        'waktu',
        'alamat',
        'no_telp',
        'durasi_sewa',
        'pengantaran',
        'total',
        'dp_invoice',
        'pelunasan_invoice',
        'note',
        'service',
        'ktp',
        'sim',
        'supir',
    ];

    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    public function getAutoNumberOptions()
    {
        return [
            'bookingcode' => [
                'format'    => 'SRC?',
                'length'    => 3
            ]
        ];
    }

    // public function getStartDateAttribute($value){
    //     return Carbon::parse($value)->format('d-m-Y');
    // }

    // public function getEndDateAttribute($value){
    //     return Carbon::parse($value)->format('d-m-Y');
    // }

    public function armada()
    {
        return $this->hasOne(Armada::class, 'id' , 'armada_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
