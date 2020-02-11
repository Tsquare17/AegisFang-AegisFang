<?php

namespace App\Controllers;

use AegisFang\Router\JsonController;

/**
 * Class RestController
 */
class RestController extends JsonController
{
    public function index(): void
    {
        $this->send(
            [
            	'index'
            ]
        );
    }

	public function get()
	{
		$this->send(
			[
				'get'
			]
		);
    }

	public function post()
	{
		$this->send(
			[
				'post'
			]
		);
	}

	public function put()
	{
		$this->send(
			[
				'put'
			]
		);
    }

	public function delete()
	{
		$this->send(
			[
				'delete'
			]
		);
    }

	public function options()
	{
		$this->send(
			[
				'options'
			]
		);
    }
}
