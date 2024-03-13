<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id','doctor_id','patient_id','comment','star_rating','created_at','updated_at'
    ];

    public function doctor(){
        return $this->belongsTo(User::class);
    }
    
    public function patient(){
        return $this->belongsTo(User::class);
    }

}
