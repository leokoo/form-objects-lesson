<?php

namespace App\Http\Forms;

class PublishPostForm extends Form
{
	protected $rules = [
		'body' => 'required'
	];

	public function persist() {
		var_dump('save crap to the db');
	}
}