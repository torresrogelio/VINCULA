<?php

class Exchange extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'student_id' => 'required',
		'agreement_id' => 'required',
		'departure_date' => 'required',
		'arrival_date' => 'required',
		'is_materialized' => 'required'
	);
}
