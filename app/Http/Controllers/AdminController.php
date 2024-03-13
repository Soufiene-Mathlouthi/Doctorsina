<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Appointment;
use App\Models\Finance;
use App\Models\Payment;
use App\Models\TimeSchedule;
use App\Models\CaseHistory;
use App\Models\Document;
use App\Models\Prescription;
use App\Models\User;
use App\Models\Favourite;
use App\Models\department_user;
use App\Models\scheduling;
use Carbon\Carbon;
use App\Models\Review;
use App\Http\Controllers\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index_admin')->with('nbrdoctors',User::where('type','doctor')->get()->count())
                                        ->with('nbrApp',Appointment::get()->count())
                                        ->with('doctors',User::where('type','doctor')->get())
                                        ->with('patients',User::where('type','patient')->get())
                                        ->with('nbrpatients',User::where('type','patient')->get()->count());

    }
    public function specialities(){
        return view('admin.specialities');
    }

    public function doctors(){
        return view('admin.doctor-list');
    }

    public function patients(){
        return view('admin.patient-list')->with('patients',User::where('type','patient')->get());
    }

    public function settings(){
        return view('admin.settings');
    }

    public function reviews(){
        $reviews = DB::table('reviews')->get();
        return view('admin.reviews')->with('reviews',$reviews);
    }

    public function appointment(){
        $apps = DB::table('appointments')->get();
    return view('admin.appointment-list')->with('appointments',appointment::where('doctor_id',1)->get());
    }
}