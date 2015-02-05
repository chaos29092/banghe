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
                <h1 class="title">@yield('productTitle')</h1>
            </div>
        </header>

        <div class="container">
            <div class="row">
                <article class="col-sm-12 col-md-9 content product-page pull-right">
                    <div class="row">
                        <div class="col-sm-5 col-md-5">
                            <div class="image-box">
                                <div class="general-img">
                                    @yield('productImage')

                                </div>
                                <!-- .general-img -->

                            </div>
                        </div>

                        <div class="col-sm-7 col-md-7">
                            <div class="reviews-box">
                                <div class="rating-box">
                                    <div style="width: 80%" class="rating">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="73px"
                                             height="12px" viewBox="0 0 73 12" enable-background="new 0 0 73 12"
                                             xml:space="preserve">
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                               points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5"></polygon>
                                            <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                     points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 "></polygon>
                                            <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                     points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 "></polygon>
                                            <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                     points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 "></polygon>
                                            <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                     points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 "></polygon>
				  </svg>
                                    </div>
                                </div>
                                <span>@yield('piao') review(s)</span>
                            </div>

                            <div class="description">
                                @yield('productDescription')
                            </div>

                            <div class="price-box">
                                @yield('price')
                            </div>

                            <form class="form-inline add-cart-form">
                                @yield('buy')
                            </form>

                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="product-tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#description">商品详情</a></li>
                            <li><a href="#custom-tab">客户评价</a></li>
                        </ul>
                        <!-- .nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                @yield('fullDescription')
                            </div>
                            <div class="tab-pane" id="custom-tab">
                                <h3>暂无评价</h3>
                            </div>
                        </div>
                        <!-- .tab-content -->
                    </div>

                    <div class="clearfix"></div>

                    <div class="recommended-product carousel-box load overflow">
                        <div class="title-box no-margin">
                            <a class="next" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16"
                                     enable-background="new 0 0 9 16" xml:space="preserve">
				<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc"
                         points="1,0.001 0,1.001 7,8 0,14.999 1,15.999 9,8 "></polygon>
			  </svg>
                            </a>
                            <a class="prev" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16"
                                     enable-background="new 0 0 9 16" xml:space="preserve">
				<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc"
                         points="8,15.999 9,14.999 2,8 9,1.001 8,0.001 0,8 "></polygon>
			  </svg>
                            </a>

                        </div>


                    </div>
                    <!-- .recommended-product -->
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
                                <li><a href="{{url('products/xinnao')}}">心脑血管套餐</a></li>
                                <li><a href="{{url('products/yigan')}}">常规检测套餐</a></li>
                                <li><a href="{{url('products/quanpu')}}">全谱检测套餐</a></li>
                                <li><a href="{{url('products/tianfu')}}">儿童天赋基因检测</a></li>
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
                                <a href="{{url('products/xinnao')}}" class="product-image">
                                    <img src="{{asset('img/products/dna_small.jpg')}}" width="64" height="64" alt="" title="">
                                </a>

                                <h3 class="product-name">
                                    <a href="{{url('products/xinnao')}}">心脑血管套餐</a>
                                </h3>

                                <div class="price-box">
                                    <span class="price-old">￥3000</span>
                                    <span class="price">￥1600.00</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="{{url('products/quanpu')}}" class="product-image">
                                    <img src="{{asset('img/products/dna_small.jpg')}}" width="64" height="64" alt="" title="">
                                </a>

                                <h3 class="product-name">
                                    <a href="{{url('products/quanpu')}}">全谱检测套餐</a>
                                </h3>

                                <div class="price-box">
                                    <span class="price-old">￥12900</span>
                                    <span class="price">￥6900.00</span>
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