<?php

namespace App\Controllers;

use App\Models\Model;


class Controller {

	public function index(Model $model)
	{
		return $model->getItem();
	}

	public function store(Model $model)
	{
		return $model->save('example data');
	}
}
