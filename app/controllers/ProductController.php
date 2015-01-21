<?php

class ProductController extends BaseController {

	public function products()
	{
		return View::make('product.products');
	}

	public function changjian()
	{
		return View::make('product.changjian');
	}

	public function women()
	{
		return View::make('product.women');
	}

	public function men()
	{
		return View::make('product.men');
	}

	public function xinnao()
	{
		return View::make('product.xinnao');
	}

	public function yigan()
	{
		return View::make('product.yigan');
	}

	public function quanpu()
	{
		return View::make('product.quanpu');
	}

}
