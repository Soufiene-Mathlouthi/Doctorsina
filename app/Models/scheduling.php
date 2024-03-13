<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class scheduling extends Model
{
    protected $fillable = [
        'doctor_id','day','start_time','end_time'
    ];

    public function doctor(){
        return $this->belongsTo(User::class);
    }

}
