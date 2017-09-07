<?php

namespace App\Http\Forms;

class PublishPostForm extends Form
{
	protected $rules = [
		'body' => 'required'
	];

	public function persist() {
		// $post = Post::create($this->fields());
		var_dump('save ' . $this->body . ' to the db');
		var_dump($this->fields());
	}
}