<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email', 'password','address','picture','birth_date','gender','phone','mobile','role_id','medical_degree','speciality','biography','educational_qualification'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Scopes
    public function scopeEmployee($query)
    {
        return $query->whereType('admin')->whereType('doctor')->whereType('patient');
    }

    public function scopeAdmin($query)
    {
        return $query->whereType('admin');
    }

    public function scopeDoctor($query)
    {
        return $query->whereType('doctor');
    }

    public function scopePatient($query)
    {
        return $query->whereType('patient');
    }

    // Relation Ships
    // Global Relations
    public function departments(){
        return $this->belongsToMany(Department::class);
    }

    public function timeSchedules(){
        return $this->hasMany(TimeSchedule::class);
    }

    public function dayoffSchedules(){
        return $this->hasMany(DayoffSchedule::class);
    }
    // Doctor & Patient Relations
    public function prescriptions(){
        return $this->hasMany(Prescription::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    // Patient Relations
    public function casesHistories(){
        return $this->hasMany(CaseHistory::class);
    }

    public function documents(){
        return $this->hasMany(Document::class);
    }

    public function age()
{
    return Carbon::parse($this->attributes['birth_date'])->age;
}



    // Short Cuts
    public function hasDepartment($departmentId){
        return in_array($departmentId,$this->departments->pluck('id')->toArray());
    }
}
