<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::resource('teachers', 'TeachersController');

Route::resource('students', 'StudentsController');

Route::resource('students', 'StudentsController');

Route::resource('companies', 'CompaniesController');

Route::resource('agreements', 'AgreementsController');

Route::resource('company_types', 'Company_typesController');

Route::resource('work_offers', 'Work_offersController');