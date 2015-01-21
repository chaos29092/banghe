@extends('master')

@section('title')
    <title>天赐基因检测</title>
    <meta name="keywords" content="天赐 基因检测 预防癌症">
    <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
    <meta name="author" content="itembridge.com">
@stop

@section('content')
    <div>
        <img src="{{asset('img/banner1.jpg')}}" alt=""/>
    </div>
<section id="main">

<article class="content">
<div class="container">

<div class="row">
    <div class="bottom-padding col-sm-6 col-md-6">
        <h4>遗传图谱</h4>

        <p class="lead">右图如果有人发现了某种遗传疾病， <br/>
        你知道哪些人会影响到你或者你的孩子吗？</p>

        <h6>小贴士： 只有六人不会被影响到</h6>

    </div>


    <div class="bottom-padding col-sm-6 col-md-6">
        <img src="img/jiapu.jpg" class="img-responsive img-rounded center-block" alt=""/>
    </div>
</div>
</div>

<div class="container-fluid" id="duyi">
    <div class="container">
        <div class="row" >
            <div class="bottom-padding col-sm-6 col-md-6">
                    <img src="img/butongren.jpg" class="img-responsive img-rounded center-block" alt=""/>
            </div>

            <div class="bottom-padding col-sm-6 col-md-6">
                <h4>基因的独一无二性</h4>
                <p class="lead">看看你周围的人，你可以一目了然地发现，他们之间是多么的不同。</p>

                <p class="lead">他们的脸、身体、言行举止以及个性似乎都举世无双。整个人类社会当然也是如此。</p>
            </div>


        </div>
    </div>
</div>

<div class="container">

<div class="row">
    <div class="bottom-padding col-sm-6 col-md-6">
        <a href="{{url('privacy')}}" target="_blank"><h4>隐私与安全</h4></a>

        <p class="lead">我们非常重视您的隐私，邦禾生物承诺不向任何人或组织透露用户个人信息，除非获得当事人授权或根据国家相关法律要求，为此邦禾生物特别制定 <strong>《隐私权和安全性声明》</strong>。</p>

    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        <img src="img/anquan.jpg" class="img-responsive img-rounded center-block" alt=""/>
    </div>
</div>
</div>

<div class="container-fluid" id="duyi">
    <div class="container">
        <div class="row" >
            <div class="bottom-padding col-sm-6 col-md-6">
                    <img src="{{asset('img/liucheng.jpg')}}" class="img-responsive img-rounded center-block" alt=""/>
            </div>

            <div class="bottom-padding col-sm-6 col-md-6">
                <a href="{{url('process')}}"><h4>我们的检测流程</h4></a>
                <p class="lead">经过我们不断优化后的检测流程，可以给您的检测带来最大方便。</p>
                <a href="{{url('process')}}"><p class="lead">点击查看详细检测流程</p></a>
            </div>
        </div>
    </div>
</div>

<div class="container" id="price">
            <div class="title-box text-center">
                <h1 class="title">邦禾基因套餐选择</h1>
            </div>
    <div class="row">
        <a href="{{url('products/changjian')}}"><div class="col-md-3 well well-lg">
            <h4 class="text-center">体验套餐</h4>
        </div></a>
        <a href="{{url('products/changjian')}}"><div class="col-md-3 well well-lg">
            <h4 class="text-center">女性健康套餐</h4>
        </div></a>
        <div class="col-md-3 well well-lg">
            <h4 class="text-center">男性健康套餐</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 well well-lg">
            <h4 class="text-center">心脑血管检测套餐</h4>
        </div>
        <div class="col-md-3 well well-lg">
            <h4 class="text-center">常规检测套餐</h4>
        </div>
        <div class="col-md-3 well well-lg">
            <h4 class="text-center">全谱检测套餐</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 well well-lg">
            <h4 class="text-center">儿童天赋基因检测</h4>
        </div>
    </div>
</div>

<div class="full-width-box bottom-padding" id="tem">
    <div class="fwb-bg background-green"></div>

    <div class="container">
        <div class="title-box text-center title-white">
            <h1 class="title">行业新闻</h1>
        </div>
        <div>
        <blockquote>
          <a href="{{url('new_1')}}"><p>如果姚贝娜提前做了基因检测，她的天籁之音就可以继续唱响舞台</p></a>
          <footer>2015.01.19</footer>
        </blockquote>
        <blockquote>
          <a href="{{url('new_2')}}"><p>基因检测：一管血“扫”出你的疾病地雷</p></a>
          <footer>2015.01.18</footer>
        </blockquote>
        <blockquote>
          <a href="{{url('new_3')}}"><p>个体化用药要靠基因检测来实现</p></a>
          <footer>2014.12.04</footer>
        </blockquote>
        </div>
    </div>
</div>

<div class="container">
<a href="#"><h2><button type="button" class="btn btn-danger btn-lg center-block">现在订购</button></h2></a>


</div>
</article>
</section>

@stop