<?php

class Current_graduate_student_job extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'company_id' => 'required',
		'job_title' => 'required',
		'manager_email' => 'required',
		'start_date' => 'required',
		'completion_date' => 'required'
	);
}
