<?php

use App\User;
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

//Authentication Routes
Auth::routes();
Route::get('/logout', array('as'=>'logout','uses'=>'Auth\LoginController@logout'));

Route::get('/register',function() {
    return view('auth.register');
})->name('register');


//Home Route
Route::get('/', array( 'as' => 'home', 'uses' => 'HomeController@index'));


//Wellness routes
Route::get('/wellness', array('as' => 'wellnessHome', 'uses' => 'WellnessController@home'));

//Create new patient
Route::get('/wellness/patient/create', array('as'=>'wellnessPatientCreate', 'uses' => 'wellnessController@createPatient'));
Route::post('/wellness/patient/create', array('as'=>'wellnessPatientStore', 'uses' => 'wellnessController@storePatient'));

//Patient view
Route::get('/wellness/patient-list', array('as' => 'wellnessPatientList', 'uses' => 'WellnessController@patientList'));
Route::get('/wellness/patient/{id}', array('as' => 'wellnessPatientDetails', 'uses' => 'WellnessController@patientDetails'));
Route::get('/wellness/patient/{id}/chart', array('as' => 'wellnessPatientChartData', 'uses' => 'WellnessController@getPatientChart'));

//Edit Patient
Route::get('/wellness/patient/{id}/edit', array('as'=>'wellnessPatientEdit','uses' => 'WellnessController@editPatient'));
Route::post('/wellness/patient/{id}/edit',array('as'=>'wellnessPatientSave','uses' => 'WellnessController@updatePatient'));

//Delete patient
Route::delete('/wellness/patient/{id}',array('as'=>'wellnessPatientDelete', 'uses'=>'wellnessController@deletePatient'));

//Wellness graph data in JSON
Route::get('/wellness/json/{select}' , array('as' => 'wellnessGraph', 'uses' => 'WellnessController@graphSelect'));