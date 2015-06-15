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
//news
	public function news()
	{
		return View::make('news.news');
	}
	public function new_1()
	{
		return View::make('news.new_1');
	}
	public function new_2()
	{
		return View::make('news.new_2');
	}
	public function new_3()
	{
		return View::make('news.new_3');
	}
	public function new_4()
	{
		return View::make('news.new_4');
	}
	public function new_5()
	{
		return View::make('news.new_5');
	}
	public function new_6()
	{
		return View::make('news.new_6');
	}

    public function new_7()
	{
		return View::make('news.new_7');
	}

    public function new_8()
	{
		return View::make('news.new_8');
	}

    public function new_9()
	{
		return View::make('news.new_9');
	}

    public function new_10()
	{
		return View::make('news.new_10');
	}

//dna
	public function dna()
	{
		return View::make('dna');
	}
	public function dna_1()
	{
		return View::make('dna.dna_1');
	}

	public function dna_2()
	{
		return View::make('dna.dna_2');
	}

	public function dna_3()
	{
		return View::make('dna.dna_3');
	}
}
