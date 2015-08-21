<?php

class Work_offer_student extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'work_offer_id' => 'required',
		'student_id' => 'required',
		'start_date' => 'required',
		'completion_date' => 'required'
	);
}
