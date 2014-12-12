@extends('master')

@section('title')
    <title>关于邦禾</title>
    <meta name="keywords" content="天赐基因检测 关于邦禾">
    <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
    <meta name="author" content="itembridge.com">
@stop

@section('content')
    <section id="main">

        <header class="page-header">
            <div class="container">
                <h1 class="title">关于邦禾</h1>
            </div>
        </header>

        <div class="container">
            <div class="title-box">
                <h2 class="h1 title">邦禾——DNA技术应用普及者！</h2>
            </div>

            <div class="title-box">
                <h2 class="h1 title">概况</h2>
            </div>
            <p>上海邦禾生物技术有限公司坐落于上海浦东新区，注册资金1000万元人民币，是一家专业从事基因检测的高科技企业。</p>

            <img src="{{asset('img/zizhi.jpg')}}" alt=""/>
        </div>

    </section>

@stop