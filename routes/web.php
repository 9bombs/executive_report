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

Route::get('register',function() {
    return view('auth.register');
})->name('register');


//Home Route
Route::get('/', array( 'as' => 'home', 'uses' => 'HomeController@index'));


//Wellness routes
Route::get('/wellness/home', array('as' => 'wellnessHome', 'uses' => 'WellnessController@home'));
Route::get('/wellness/patient-list', array('as' => 'wellnessPatientList', 'uses' => 'WellnessController@patientList'));
Route::get('/wellness/patient/{id}', array('as' => 'wellnessPatientDetails', 'uses' => 'WellnessController@patientDetails'));
Route::get('wellness/patient/{id}/chart', array('as' => 'wellnessPatientChartData', 'uses' => 'WellnessController@getPatientChart'));


//Wellness graph data in JSON
Route::get('/wellness/json/{select}' , array('as' => 'wellnessGraph', 'uses' => 'WellnessController@graphSelect'));