<?php

class Work_offer extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'company_id' => 'required',
		'title' => 'required',
		'contact_email' => 'required',
		'job_position' => 'required',
		'job_description' => 'required',
		'job_salary' => 'required',
		'job_location' => 'required',
		'workday' => 'required',
		'available' => 'required'
	);
}
