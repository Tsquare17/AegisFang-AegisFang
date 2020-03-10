<?php

namespace App\Controllers;

use AegisFang\Auth\Auth;
use AegisFang\Router\JsonController;

/**
 * Class AuthController
 */
class AuthController extends JsonController
{
    public function index(): void
    {
        $this->send(
            ['auth']
        );
    }

	public function register(Auth $auth)
	{
		if (
			!$this->request->user_name
			|| ! $this->request->user_email
			|| ! $this->request->user_pass
		) {
			return false;
		}

		$this->send(
			[$auth->register($this->request->user_name, $this->request->user_email, $this->request->user_pass)]
		);
    }

	public function authenticate(Auth $auth)
	{
		if (Auth::check($this->request->user_name, $this->request->user_pass)) {
			$this->send([
				true
			]);
		} else {
			$this->send([
				false
			]);
		}
    }
}
