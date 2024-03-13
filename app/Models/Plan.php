<?php
   
namespace App\Models;
   
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   
class Plan extends Model
{
   // User::factory()->create();
   
    protected $fillable = [
        'name',
        'slug',
        'stripe_plan',
        'price',
        'description',
    ];
   
    public function getRouteKeyName()
    {
        return 'slug';
    }
}