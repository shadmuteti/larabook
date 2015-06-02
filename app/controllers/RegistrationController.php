<?php

class RegistrationController extends \BaseController {

		public function create()
	{
		return View::make('registration.create');
	}


public function store()
{$user=User::create(
    Input::only('username','email','password')
);
    Auth::login($user);
    return Redirect::home();
}

}
