<?php

namespace App\Http;

use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{
	public function verify($username, $password)
	{
		$credentials = [
			'phone'    => $username,
			'password' => $password,
		];

		if (Auth::once($credentials)) {
			return Auth::user()->id;
		}

		return false;
	}
}