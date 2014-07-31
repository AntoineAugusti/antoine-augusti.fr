<?php

class PageController extends BaseController {

	public function home()
	{
		return View::make('pages.home');
	}
}
