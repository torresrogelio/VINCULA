<?php

class Company extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'RFC' => 'required',
		'type' => 'required',
		'street' => 'required',
		'exterior_number' => 'required',
		'interior_number' => 'required',
		'postal_code' => 'required',
		'city' => 'required',
		'satate' => 'required',
		'country' => 'required',
		'is_internal_company' => 'required'
	);
}
