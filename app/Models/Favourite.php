<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    public function doctor()
    {
    	return $this->belongsTo(User::class); 
    }
    
    public function department(){
        return $this->belongsTo(Department::class);
    }

}
