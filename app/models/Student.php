<?php

class Student extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
		'number' => 'required',
		'start_period' => 'required',
		'graduation_period' => 'required'
	);
}
