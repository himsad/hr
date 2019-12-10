<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('accounts', 'accountController');

Route::resource('countries', 'countryController');

Route::resource('failedJobs', 'FailedJobController');

Route::resource('invitations', 'invitationController');


Route::get('jobs/{job_type?}','jobController@index');

Route::resource('jobs', 'jobController');

Route::resource('organisations', 'organisationController');

Route::resource('organisationusers', 'organisationuserController');

Route::resource('roles', 'roleController');

Route::resource('skills', 'skillController');

Route::resource('users', 'userController');