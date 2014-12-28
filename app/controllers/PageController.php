<?php

class PageController extends BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function process()
	{
		return View::make('process');
	}

	public function privacy()
	{
		return View::make('privacy');
	}

	public function about_us()
	{
		return View::make('about_us');
	}

	public function channel()
	{
		return View::make('channel');
	}

	public function buy()
	{
		return View::make('buy');
	}

	public function new_1()
	{
		return View::make('new_1');
	}
}
