<?php

namespace App\Controllers;

use App\Models\Model;


class Controller {

	protected $model;

	public function __construct( Model $model )
	{
		$this->model = $model;
	}

	public function index()
	{
		return $this->model->getItem();
	}

	public function store()
	{
		return $this->model->save('example data');
	}
}
