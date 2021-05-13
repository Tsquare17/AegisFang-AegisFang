<?php

namespace App\Controllers;

use AegisFang\Auth\Auth;
use AegisFang\Router\JsonController;

/**
 * Class AuthController
 */
class AuthController extends JsonController
{
    public function index()
    {
        return $this->dispatch(
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

		return $this->dispatch(
			[$auth->register($this->request->user_name, $this->request->user_email, $this->request->user_pass)]
		);
    }

	public function authenticate(Auth $auth)
	{
		if (Auth::check($this->request->user_name, $this->request->user_pass)) {
			return $this->dispatch([
				true
			]);
		}
        return $this->dispatch([
            false
        ]);

    }
}
