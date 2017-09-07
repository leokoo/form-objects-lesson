<?php

namespace App\Http\Forms;

class PublishPostForm extends Form
{
	protected $rules = [
		'body' => 'required'
	];

	public function persist() {
		// $post = Post::create($this->fields());
		var_dump('save crap to the db');
	}
}