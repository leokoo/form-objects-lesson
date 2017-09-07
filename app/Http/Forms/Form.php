<?php


namespace App\Http\Forms;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

abstract class Form {

	use ValidatesRequests;
	protected $request;
	protected $rules = [];

	public function __construct(Request $request = null)
	{
		$this->request = $request ?: request();
	}

	public function save()
	{
		if ($this->isValid())
		{
			$this->persist();

			return true;
		}

		return false;
	}

	public function fields() {
		return $this->request->all();
	}

	abstract public function persist();

	protected function isValid()
	{
		$this->validate($this->request, $this->rules);

		return true;
	}

	public function __get($property)
	{
		return $this->request->input($property);
	}
}