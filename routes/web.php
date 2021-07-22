<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::POST('/Message', function(Request $request){
    event(
        new Message(
            $request->input('username'), 
            $request->input('message')
        )
    );
});

Route::group(['middleware' => 'App\Http\Middleware\patientMiddleware'], function(){
    Route::match(['post','get'], '/patient', 'App\Http\Controllers\PatientController@edit');
});

Route::group(['middleware' => 'App\Http\Middleware\doctorMiddleware'], function(){
    Route::match(['post','get'], '/existingPatient', 'App\Http\Controllers\PatientController@show')->name('existingPatient');
    Route::match(['post','get'], '/searchResult', 'App\Http\Controllers\PatientController@show');
    Route::match(['post','get'], '/newPatient', 'App\Http\Controllers\PatientController@index');
    Route::match(['post','get'], '/doctorOffice', 'App\Http\Controllers\DoctorDecisionController@index');
    Route::match(['post','get'], '/doctorRemark/{id}', 'App\Http\Controllers\DoctorDecisionController@edit');
    Route::match(['post','get'], '/managePatient', 'App\Http\Controllers\PatientController@managePatient');
    Route::match(['post','get'], '/patientHistory', 'App\Http\Controllers\PatientController@patientHistory');
});

// Route::group(['middleware' => 'App\Http\Middleware\doctorPatientMiddleware'], function(){
// });


//Route::get('managePatient', 'PatientController@index');





//Route::get('/doctorOffice', 'App\Http\Controllers\PatientController@show');
//Route::get('/searchResult', 'App\Http\Controllers\PatientController@store');