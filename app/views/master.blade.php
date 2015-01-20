<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    @yield('title')
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <!-- Plagins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/pages.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home-pages-customizer.css')}}">

    <!-- IE Styles-->
    <link rel='stylesheet' href="{{asset('assets/css/ie/ie.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel='stylesheet' href="{{asset('assets/css/ie/ie8.css')}}">
    <![endif]-->
</head>
<body class="fixed-header">
<div class="page-box">
<div class="page-box-content">

<header class="header header-two">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('img/logo.jpg')}}" class="logo-img" alt="">
                        </a>
                    </div>
                </div>
                <!-- .logo-box -->

                <div class="col-xs-6 col-md-10 col-lg-9 right-box">
                    <div class="right-box-wrapper">
                        <div class="header-icons">
                            <div>
                                <p>邦禾生物—DNA技术应用普及者</p>
                            </div>
                            <!-- .search-header-->
                        </div>

                        <div class="primary">
                            <div class="navbar navbar-default" role="navigation">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse"
                                        data-target=".primary .navbar-collapse">
                                    <span class="text">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <nav class="collapse collapsing navbar-collapse">
                                    <ul class="nav navbar-nav navbar-center">
                                        <li class="item-primary item-bg">
                                            <a href="{{url('/')}}">首页</a>
                                        </li>
                                        <li class="item-primary item-bg">
                                            <a href="{{url('products')}}">产品列表</a>
                                        </li>

                                        <li class="item-primary item-bg">
                                            <a href="{{url('process')}}">检测流程</a>
                                        </li>
                                        <li class="item-primary item-bg">
                                            <a href="{{url('privacy')}}">隐私与安全</a>
                                        </li>
                                        <li class="item-primary item-bg">
                                            <a href="{{url('about_us')}}">关于我们</a>
                                        </li>
                                        <li class="item-primary item-bg">
                                            <a href="{{url('dna')}}">DNA百科</a>
                                        </li>
                                        <li class="item-danger item-bg text-danger">
                                            <a href="{{url('buy')}}"
                                               target="_blank">如何购买！<span class="item-new">抢</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- .primary -->
                    </div>
                </div>
            </div>
            <!--.row -->
        </div>
    </div>
    <!-- .header-wrapper -->
</header>
<!-- .header -->


@yield('content')

</div>
<!-- .page-box-content -->
</div>
<!-- .page-box -->

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row sidebar">
                <aside class="col-xs-12 col-sm-6 col-md-3 widget social">
                    <div class="title-block">
                        <h3 class="title">渠道合作</h3>
                    </div>
<address>
  <strong>为更好的开拓市场</strong><br>
  诚招代理商<br>
  有意者请联系我们。<br>
  <abbr>招商电话:</abbr> 400 6856 220
</address>
                    <div class="clearfix"></div>
                </aside>

                <aside class="col-xs-12 col-sm-6 col-md-3 widget newsletter">
                    <div class="title-block">
                        <h3 class="title">站内搜索</h3>
                    </div>
                    <div>
                        <p></p>

                        <div class="clearfix"></div>
                        <form>
                            <input class="form-control" type="email">
                            <button class="submit"><span class="glyphicon glyphicon-arrow-right"></span></button>
                        </form>
                    </div>
                </aside>
                <!-- .newsletter -->

                <aside class="col-xs-12 col-sm-6 col-md-3 widget links">
                    <div class="title-block">
                        <h3 class="title">快速链接</h3>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="{{asset('about_us')}}">关于邦禾</a></li>
                            <li><a href="{{asset('process')}}">检测流程</a></li>
                            {{--<li><a href="{{asset('channel')}}">渠道合作</a></li>--}}
                            <li><a href="{{asset('buy')}}">如何购买</a></li>
                        </ul>
                    </nav>
                </aside>

                <aside class="col-xs-12 col-sm-6 col-md-3 widget links">
                    <div class="title-block">
                        <h3 class="title">DNA百科</h3>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="{{url('dna.dna_1')}}">基因检测与重大疾病预防</a></li>
                            <li><a href="{{url('dna.dna_2')}}">基因检测与个性化用药</a></li>
                            <li><a href="{{url('dna.dna_3')}}">基因检测与生活方式</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
        </div>
    </div>
    <!-- .footer-top -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="copyright col-xs-12 col-sm-3 col-md-3">
                    Copyright © 上海邦禾科技 2014
                </div>

                <div class="phone col-xs-6 col-sm-3 col-md-3">
                    <div class="footer-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <path fill="#c6c6c6" d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
			   c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
				M11.001,12H5V2h6V12z"></path>
			</svg>
                    </div>
                    <strong class="title">咨询：</strong> 400 6856 220 <br>
                    <strong>招商：</strong> 400 6856 220
                </div>

                <div class="address col-xs-6 col-sm-3 col-md-3">
                    <div class="footer-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <g>
				<g>
				  <path fill="#c6c6c6" d="M8,16c-0.256,0-0.512-0.098-0.707-0.293C7.077,15.491,2,10.364,2,6c0-3.309,2.691-6,6-6
					c3.309,0,6,2.691,6,6c0,4.364-5.077,9.491-5.293,9.707C8.512,15.902,8.256,16,8,16z M8,2C5.795,2,4,3.794,4,6
					c0,2.496,2.459,5.799,4,7.536c1.541-1.737,4-5.04,4-7.536C12.001,3.794,10.206,2,8,2z"></path>
				</g>
				<g>
				  <circle fill="#c6c6c6" cx="8.001" cy="6" r="2"></circle>
				</g>
			  </g>
			</svg>
                    </div>
                    河南郑州高新区长椿路11号国家大学科技园研发5号楼
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a href="#" class="up">
                        <span class="glyphicon glyphicon-arrow-up"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer-bottom -->
</footer>
<div class="clearfix"></div>

<script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>