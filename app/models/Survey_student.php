<?php

class Survey_student extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'student_id' => 'required',
		'survey' => 'required'
	);
}
