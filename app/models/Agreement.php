<?php

class Agreement extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'company_id' => 'required',
		'type' => 'required',
		'start_date' => 'required',
		'end_date' => 'required',
		'status' => 'required'
	);
}
