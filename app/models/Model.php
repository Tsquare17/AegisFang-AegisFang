<?php

namespace App\Models;


class Model {

	protected $item;

	public function __construct()
	{
		$this->item = 'Hello World!';
	}

	public function getItem()
	{
		return $this->item;
	}

	public function save($item)
	{
		return 'Fake saved ' . $item;
	}
}