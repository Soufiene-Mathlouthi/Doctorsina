<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\AdminController as AdminController;
use App\Http\Controllers\AIController as AIController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('register','RegisterController');


Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});
Route::get('/video', function () {
    return view('frontend.video');
});
Route::get('/privacy', function () {
    return view('frontend.privacy');
});
Route::get('/terms', function () {
    return view('frontend.terms');
});
Route::get('/oursolution', function () {
    return view('frontend.oursolution');
});
Route::get('/partners', function () {
    return view('frontend.partners');
});
Route::get('/ourteam', function () {
    return view('frontend.ourteam');
});


Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'App\Http\Controllers\ProfileController@ShowUserProfile')->name('main');
Route::get('favourites', 'App\Http\Controllers\ProfileController@ShowFavourites')->name('favourites');
Route::get('profile-settings','App\Http\Controllers\ProfileController@edit_patient')->name('profile.edit-patient');
Route::get('doctor-profile-settings','App\Http\Controllers\ProfileController@edit_doctor')->name('profile.edit-doctor');
Route::get('doctor-profile/{id}','App\Http\Controllers\ProfileController@doctor_profile')->name('doctor-profile');
Route::post('doctor-profile/{id}','App\Http\Controllers\ProfileController@review')->name('review');
Route::get('review','App\Http\Controllers\ProfileController@show_review')->name('show-review');
Route::get('my-patients','App\Http\Controllers\ProfileController@myPatient')->name('my-patients');
Route::put('profile-settings','App\Http\Controllers\ProfileController@update')->name('profile.update');
Route::get('change-password', 'App\Http\Controllers\ProfileController@change_password')->name('change_password');
Route::post('update-password','App\Http\Controllers\ProfileController@update_password')->name('update_password');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('add-prescription','App\Http\Controllers\ProfileController@prescription')->name('prescription');
Route::post('add-prescription','App\Http\Controllers\ProfileController@add_prescription')->name('add-prescription');
Route::get('patient-profile','App\Http\Controllers\ProfileController@patient_profile')->name('patient-profile');
Route::get('/search','App\Http\Controllers\ProfileController@search')->name('search');
Route::get('/booking/{id}','App\Http\Controllers\ProfileController@booking')->name('appointments_booked');
Route::get('/appointments','App\Http\Controllers\ProfileController@appointments')->name('appointments');
Route::get('/appointments/{id}/{created_at}','App\Http\Controllers\ProfileController@appointments_cancel')->name('appointments_cancel');
Route::get('/appointment/{id}/{created_at}','App\Http\Controllers\ProfileController@appointments_accept')->name('appointments_accept');
Route::get('/predict', 'App\Http\Controllers\AIController@index');
Route::get('/social-media','App\Http\Controllers\ProfileController@social')->name('social-media');

Route::post('/predict', 'App\Http\Controllers\AIController@predict');

}
);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
	Route::get('home','App\Http\Controllers\AdminController@index')->name('admin.home');
	// Users Routes
	Route::get('specialities','App\Http\Controllers\AdminController@specialities');
	// Roles Routes
	Route::get('doctor-list','App\Http\Controllers\AdminController@doctors');
	// Permission Routes
	Route::get('patient-list','App\Http\Controllers\AdminController@patients');
	// Post Routes
	Route::get('settings','App\Http\Controllers\AdminController@settings');
    //Reviews
    Route::get('reviews','App\Http\Controllers\AdminController@reviews');

    Route::get('appointment-list','App\Http\Controllers\AdminController@appointment');
	// Tag Routes
	Route::resource('admin/tag','App\Http\Controllers\AdminController');
	// Category Routes
	Route::resource('admin/category','App\Http\Controllers\AdminController');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
});


Route::middleware("auth")->group(function () {
    Route::get('plans', [PlanController::class, 'index']);
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});


Route::resource('/departments', 'DepartmentController');
Route::get('/treatmenthistory/{doctor}', 'DoctorController@treatmentHistory')->name('treatment-history');
Route::resource('/doctors', 'DoctorController');
Route::resource('/patients', 'App\Http\Controllers\PatientController');
Route::resource('/nurses', 'NurseController');
Route::resource('/accountants', 'AccountantController');
Route::resource('/pharmacists', 'PharmacistController');
Route::resource('/receptionists', 'ReceptionistController');
Route::resource('/laboratorists', 'LaboratoristController');
Route::get('/timeschedule/{doctor}', 'TimeScheduleController@timeSchedulesForDoctor')->name('doctor-time-schedules');
Route::get('/timeschedule/{doctor}/create/', 'TimeScheduleController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor');
Route::resource('/timeschedules', 'TimeScheduleController');
Route::resource('/casehistories', 'CaseHistoryController');
Route::resource('/documents', 'DocumentController');
Route::resource('/prescriptions', 'PrescriptionController');
Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
Route::resource('/medicines', 'MedicineController');
Route::resource('/services', 'ServiceController');
Route::resource('/beds', 'BedController');
Route::resource('/lapreports', 'LapReportController');
Route::resource('/laptemplates', 'LapTemplateController');
Route::resource('/bedallotments', 'BedAllotmentController');
Route::resource('/servicepackages', 'ServicePackageController');
Route::resource('/dayoffschedules', 'DayoffScheduleController');
Route::resource('/payments', 'PaymentController');
Route::resource('/paymentitems', 'PaymentItemController');
Route::resource('/expenses', 'ExpenseController');


Route::get('/getdoctorsbydepartment/', 'AppointmentController@getDoctorsByDepartment')->name('get-doctors-by-department');
Route::get('/gettimeschedulebydoctor/', 'DoctorController@getTimeScheduleByDoctor')->name('get-time-schedule-by-doctor');
Route::get('/getdayoffschedulebydoctor/', 'DoctorController@getDayoffScheduleByDoctor')->name('get-dayoff-schedule-by-doctor');
Route::get('/gettimebytimeschedule/', 'TimeScheduleController@getTimeByTimeSchedule')->name('get-time-by-time-schedule');
Route::get('/getappointmentsbydate/', 'AppointmentController@getAppointmentsByDate')->name('get-appointments-by-date');
Route::get('/getbedallotmentsbydate/', 'BedAllotmentController@getBedAllotmentsByDate')->name('get-bedallotments-by-date');
Route::get('/gettemplatebyid/', 'LapReportController@getTemplateById')->name('get-template-by-id');
Route::get('/getpaymentitembyitemid/', 'PaymentItemController@getPaymentItemByItemId')->name('get-payment-item-by-item-id');
Route::get('/getpaymentitembydoctorid/', 'PaymentItemController@getPaymentItemByDoctorId')->name('get-payment-item-by-doctor_id');
Route::get('/getuserbyusertype/', 'PublicController@getUserByUserType')->name('get-user-by-user-type');

Auth::routes();




Route::get('/profile/{id}/type/{types?}', 'App\Http\Controllers\ProfileController@showUserprofile');
Route::get('/profile/edit/{id}', 'App\Http\Controllers\ProfileController@editUserprofile');

Route::get('/profile/Appointments/{id}', 'App\Http\Controllers\ProfileController@showAppointmentForprofile');
Route::get('/profile/Appointments/details/{id}/{patient_id}/{doctor_id}', 'App\Http\Controllers\ProfileController@showAppointmentDetailsForPprofile');
Route::get('/profile/d/Appointments/Create/{id}', 'App\Http\Controllers\ProfileController@createAppointmentForProfile');

Route::get('/profile/CaseHistory/{id}', 'App\Http\Controllers\ProfileController@showCaseHistoryForprofile');
Route::get('/profile/CaseHistory/details/{id}/{caseID}', 'App\Http\Controllers\ProfileController@showCaseHistoryDetailsForprofile');
Route::get('/profile/CaseHistory/add/Case', 'App\Http\Controllers\ProfileController@createCaseHistoriesForProfile');

Route::get('/profile/Documents/{id}', 'App\Http\Controllers\ProfileController@showDocumentForprofile');
Route::get('/profile/Documents/details/{id}/{patient_id}/{doctor_id}', 'App\Http\Controllers\ProfileController@showDoumentDetailsFor');
Route::get('/profile/Documents/create/d', 'App\Http\Controllers\ProfileController@createDoumentDetailsFor');


Route::get('/profile/Prescriptions/{id}', 'App\Http\Controllers\ProfileController@showPrescriptionForprofile');
Route::get('/profile/Prescriptions/details/{id}/{patient_id}/{doctor_id}', 'App\Http\Controllers\ProfileController@showPrescriptionDetailsForProfile');

Route::get('/profile/timeSchedulesForDoctor/{id}', 'App\Http\Controllers\ProfileController@showTimeSchedulesForDoctor');
Route::get('/profile/timeschedule/{doctor}/create/', 'App\Http\Controllers\ProfileController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor-profile');

Route::get('/profile/mypatients/all', 'App\Http\Controllers\ProfileController@myPatient');




/*Admin Routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('doctor', 'DoctorController');
    Route::get('/patients', 'PatientListController@index')->name('patients');
    Route::get('/status/update/{id}', 'PatientListController@toggleStatus')->name('update.status');
    Route::get('/all-patients', 'PatientListController@allTimeAppointment')->name('all.appointments');
    Route::resource('/department', 'DepartmentController');
});*/


/*----------------------------------------------------------------------------------------------------------------------------*/
/*
* This is the main app route [Chatify Messenger]
*/
Route::get('/chat', 'App\Http\Controllers\MessagesController@index')->name(config('chatify.routes.prefix'));

/**
 *  Fetch info for specific id [user/group]
 */
Route::post('chat/idInfo', 'App\Http\Controllers\MessagesController@idFetchData');

/**
 * Send message route
 */
Route::post('chat/sendMessage', 'App\Http\Controllers\MessagesController@send')->name('send.message');

/**
 * Fetch messages
 */
Route::post('chat/fetchMessages', 'App\Http\Controllers\App\Http\Controllers\MessagesController@fetch')->name('fetch.messages');

/**
 * Download attachments route to create a downloadable links
 */
Route::get('chat/download/{fileName}', 'App\Http\Controllers\MessagesController@download')->name(config('chatify.attachments.download_route_name'));

/**
 * Authentication for pusher private channels
 */
Route::post('/chat/auth', 'App\Http\Controllers\MessagesController@pusherAuth')->name('pusher.auth');

/**
 * Make messages as seen
 */
Route::post('chat/makeSeen', 'App\Http\Controllers\MessagesController@seen')->name('messages.seen');

/**
 * Get contacts
 */
Route::get('chat/getContacts', 'App\Http\Controllers\MessagesController@getContacts')->name('contacts.get');

/**
 * Update contact item data
 */
Route::post('chat/updateContacts', 'App\Http\Controllers\MessagesController@updateContactItem')->name('contacts.update');


/**
 * Star in favorite list
 */
Route::post('chat/star', 'App\Http\Controllers\MessagesController@favorite')->name('star');

/**
 * get favorites list
 */
Route::post('chat/favorites', 'App\Http\Controllers\MessagesController@getFavorites')->name('favorites');

/**
 * Search in messenger
 */
Route::get('chat/search', 'App\Http\Controllers\MessagesController@search')->name('search');

/**
 * Get shared photos
 */
Route::post('chat/shared', 'App\Http\Controllers\MessagesController@sharedPhotos')->name('shared');

/**
 * Delete Conversation
 */
Route::post('chat/deleteConversation', 'App\Http\Controllers\MessagesController@deleteConversation')->name('conversation.delete');

/**
 * Delete Message
 */
Route::post('chat/deleteMessage', 'App\Http\Controllers\MessagesController@deleteMessage')->name('message.delete');

/**
 * Update setting
 */
Route::post('chat/updateSettings', 'App\Http\Controllers\MessagesController@updateSettings')->name('avatar.update');

/**
 * Set active status
 */
Route::post('chat/setActiveStatus', 'App\Http\Controllers\MessagesController@setActiveStatus')->name('activeStatus.set');

/*----------------------------------------------------------------------------------------------------------------------------*/





/*
* [Group] view by id
*/
Route::get('chat/group/{id}', 'App\Http\Controllers\MessagesController@index')->name('group');

/*
* user view by id.
* Note : If you added routes after the [User] which is the below one,
* it will considered as user id.
*
* e.g. - The commented routes below :
*/
// Route::get('/route', function(){ return 'Munaf'; }); // works as a route
Route::get('chat/{id}', 'App\Http\Controllers\MessagesController@index')->name('user');
// Route::get('/route', function(){ return 'Munaf'; }); // works as a user id














/*

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServicesController');

    // Employees
    Route::delete('employees/destroy', 'EmployeesController@massDestroy')->name('employees.massDestroy');
    Route::post('employees/media', 'EmployeesController@storeMedia')->name('employees.storeMedia');
    Route::resource('employees', 'EmployeesController');

    // Clients
    Route::delete('clients/destroy', 'ClientsController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientsController');

    // Appointments
    Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::resource('appointments', 'AppointmentsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
});*/
