<?php

class HomeController extends BaseController {

	public function principal()
	{
		return View::make('home.principal');
	}

}