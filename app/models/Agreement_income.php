<?php

class Agreement_income extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'amount' => 'required',
		'teacher_id' => 'required',
		'agreement_id' => 'required'
	);
}
