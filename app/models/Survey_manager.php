<?php

class Survey_manager extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'manager_email' => 'required',
		'survey' => 'required'
	);
}
