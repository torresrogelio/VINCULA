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

Route::resource('exchanges', 'ExchangesController');

Route::resource('agreement_types', 'Agreement_typesController');

Route::resource('agreement_incomes', 'Agreement_incomesController');

Route::resource('agreement_seats', 'Agreement_seatsController');

Route::resource('agreement_seat_students', 'Agreement_seat_studentsController');

Route::resource('exchange_subjects', 'Exchange_subjectsController');

Route::resource('survey_students', 'Survey_studentsController');

Route::resource('work_offers', 'Work_offersController');

Route::resource('work_offer_students', 'Work_offer_studentsController');
