<?php

class Exchange_subject extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'exchange_id' => 'required',
		'foreign_subject' => 'required',
		'local_subject' => 'required',
		'grade' => 'required'
	);
}
