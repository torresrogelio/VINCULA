<?php

class Agreement_seat extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'agreement_id' => 'required',
		'number_seats' => 'required',
		'school_career' => 'required'
	);
}
