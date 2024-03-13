<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Appointment;
use App\Models\Finance;
use App\Models\Payment;
use App\Models\TimeSchedule;
use App\Models\User;
use App\Models\Prescription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientDashboardController extends Controller
{
    public function getAppointmentsByDate(Request $request)
    {
         if ($request->date) {
            $app = DB::table('appointments')->where('date', $request->date)->get();
            $TS = collect();
            foreach ($app as $a) {
                $TS->push($a);
            }
            $json = $TS->toJson();
        }
        return response()->json(['html' => $json]);
    }

    public function getDoctorsByDepartment(Request $request)
    {

        if ($request->id) {
            $html = '<option value="">Please Select Doctor</option>';
            $department = Department::find($request->id);
            $doctors = $department->doctors;
            foreach ($doctors as $doctor) {

                $html .= '<option value="' . $doctor->id . '">' . $doctor->first_name . ' ' . $doctor->last_name . '</option>';
            }
        }
        return response()->json(['html' => $html]);
    }

    public function index(Request $request)
    {
            if ((auth()->user()->type == 'patient') or ($request->types == 'patient')) {
            return view('backend.patient-dashboard')
                ->with('appointments', Appointment::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
                ->with('prescriptions', Prescription::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
                ->with('patient', User::where('id',$request->id)->first());
            }else{
                return view('auth.profile.doctors.show')
                ->with('appointments', Appointment::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
                ->with('prescriptions', Prescription::where('patient_id',$request->id)->orWhere('doctor_id',$request->id)->get())
                ->with('doctor', User::where('id',$request->id)->first());
            }
        }

    public function store(Request $request)
    {
        if ($request->patient != 0){
            $patient = $request->patient;
        } else {
            $patient = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => 'default@clinic.com',
                'type'=> 'patient'
            ]);
        }
        Appointment::create([
            'patient_id' => $request->patient,
            'doctor_id' => $request->doctor,
            'department_id' => $request->department,
            'date' => $request->date,
            'time' => $request->timeSlots,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        if ($request->status == 'confirmed'){
            if (strpos($request->commission, '%') !== false ){
                $c = str_replace('%', '', $request->commission);
                $commission = $request->price * $c / 100;
            } else {
                $commission = $request->commission;
            }
            $payment = Payment::create([
                'doctor_id' => $request->doctor,
                'patient_id' => $request->patient,
                'sub_total' => $request->price,
                'taxes' => 0,
                'total' => $request->price,
                'amount_received' => $request->price,
                'amount_to_pay' => 0,
                'doctor_commission' => $commission,
            ]);

            $payment->paymentitems()->attach($request->item, ['payment_item_quantity' => 1]);

            $f = Finance::find(1);
            $t = 100;
            $f->update([
                'total_money' => $t + $request->price,
            ]);
        }
        // flash message
        session()->flash('success', 'New Appointment Added Successfully.');
        // redirect user
        if (auth()->user()->type == 'admin') {
        return redirect(route('appointments.index'));
        }else{
            return redirect('/profile/Appointments/'.auth()->user()->id );
        }
    }

    public function show(Appointment $Appointment)
    {
        return view('appointments.show')       
        ->with('doctor', User::where('id',$Appointment->doctor_id)->get())
         ->with('patients', User::where('id',$Appointment->patient_id)->get())
         ->with('Appointment', $Appointment);
    }

    public function edit(Appointment $Appointment)
    {
        return view('appointments.create')
            ->with('doctors', User::doctor()->get())
            ->with('patients', User::patient()->get())
            ->with('departments', Department::all())
            ->with('timeschedules', TimeSchedule::all())
            ->with('appointment', $Appointment);
    }

    public function update(Request $request, Appointment $Appointment)
    {

        $Appointment->update([
            'patient_id' => $request->patient,
            'doctor_id' => $request->doctor,
            'department_id' => $request->department,
            'date' => $request->date,
            'time' => $request->timeSlots,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        // flash message
        session()->flash('success', 'Time Schedule Updated Successfully.');
        // redirect user
        return redirect(route('appointments.index'));
    }

    public function destroy(Appointment $Appointment)
    {
        $Appointment->delete();

        // flash message
        session()->flash('success', 'Time Schedule Deleted Successfully.');
        // redirect user
        return redirect(route('appointments.index'));
    }

    public function createAppointmentForDoctor(User $doctor)
    {
        return view('appointments.create')->with('doctor', $doctor);
    }

    public function appointmentsForDoctor(User $doctor)
    {
        return view('appointments.list')->with('doctor', $doctor);
    }
    public function myPatient()
    {

        return view('backend.patient-dashboard')
        ->with('patients',
        DB::table('appointments')
            ->where('doctor_id',auth()->user()->id)
            ->join('users' , 'users.id','=','appointments.patient_id')
            ->get()->unique('patient_id')
        )
        ->with('departments',Department::all());


    }


}