@extends('master')

@section('title')
    <title>邦禾 - 基因检测产品</title>
    <meta name="keywords" content="邦禾 - 基因检测产品">
    <meta name="description" content="邦禾 - 基因检测产品">
@stop

@section('content')
    <div id="main" class="page">
        <header class="page-header">
            <div class="container">
                <h1 class="title">基因检测产品</h1>
            </div>
        </header>

        <div class="container">
            <div class="row">
                <article class="col-sm-12 col-md-9 content product-page pull-right">
                    <div class="container-fluid" id="price">
                        <div class="title-box text-center">
                            <h1 class="title">邦禾基因套餐选择</h1>
                        </div>
                        <div class="row">
                            <a href=""><div class="col-md-4 well well-lg">
                                    <h4 class="text-center">体验套餐</h4>
                                </div></a>
                            <div class="col-md-4 well well-lg">
                                <h4 class="text-center">女性健康套餐</h4>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 well well-lg">
                                <h4 class="text-center">男性健康套餐</h4>
                            </div>
                            <div class="col-md-4 well well-lg">
                                <h4 class="text-center">心脑血管检测套餐</h4>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 well well-lg">
                                <h4 class="text-center">常规检测套餐</h4>
                            </div>
                            <div class="col-md-4 well well-lg">
                                <h4 class="text-center">全谱检测套餐</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 well well-lg">
                                <h4 class="text-center">儿童天赋基因检测</h4>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- .content -->

                <div id="sidebar" class="sidebar col-sm-12 col-md-3">
                    <aside class="widget menu">
                        <header>
                            <h3 class="title">产品列表</h3>
                        </header>
                        <nav>
                            <ul>
                                <li><a href="{{url('products/changjian')}}">体验套餐</a></li>
                                <li><a href="{{url('products/women')}}">女性健康套餐</a></li>
                                <li><a href="{{url('products/men')}}">男性健康套餐</a></li>
                                <li><a href="{{url('products/xinnao')}}">心脑血管检测套餐</a></li>
                                <li><a href="{{url('products/yigan')}}">常规检测套餐</a></li>
                                <li><a href="#">全谱检测套餐</a></li>
                                <li><a href="#">儿童天赋基因检测</a></li>
                            </ul>
                        </nav>
                    </aside>
                    <!-- .menu-->

                    <aside class="widget specials">
                        <header>
                            <h3 class="title">特别推荐</h3>
                        </header>
                        <ul>
                            <li class="clearfix">
                                <a href="shop-product-view.html" class="product-image">
                                    <img src="img/content/product-7.png" width="64" height="64" alt="" title="">
                                </a>

                                <h3 class="product-name">
                                    <a href="shop-product-view.html">Xperia miro</a>
                                </h3>

                                <div class="price-box">
                                    <span class="price-old">$1500</span>
                                    <span class="price">$1199.00</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="shop-product-view.html" class="product-image">
                                    <img src="img/content/product-3.png" width="64" height="64" alt="" title="">
                                </a>

                                <h3 class="product-name">
                                    <a href="shop-product-view.html">Projector VPL-VW95ES</a>
                                </h3>

                                <div class="price-box">
                                    <div class="price">$3599.00</div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <!-- .specials-->
                </div>
                <!-- #sidebar -->
            </div>
        </div>
    </div><!-- #main -->
@stop