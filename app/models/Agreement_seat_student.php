<?php

class Agreement_seat_student extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'agreement_seats_id' => 'required',
		'student_id' => 'required',
		'start_date' => 'required',
		'completion_date' => 'required'
	);
}
