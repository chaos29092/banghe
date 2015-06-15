@extends('master')

@section('title')
    <title>如何购买 - 上海邦禾生物技术有限公司</title>
    <meta name="keywords" content="如何购买 - 上海邦禾生物技术有限公司">
    <meta name="description" content="如何购买 - 上海邦禾生物技术有限公司">
@stop

@section('content')
<section id="main">

<header class="page-header">
    <div class="container">
        <h1 class="title">如何购买</h1>
    </div>
</header>

<div class="container">
    <div class="title-box">
        <h2 class="h1 title">银行汇款</h2>
    </div>
    <p>您可以直接使用银行汇款</p>
    <p>银行账号：88888888888</p>


    <div class="title-box">
            <h2 class="h1 title">在线支付</h2>
    </div>
    <p>您可以在产品页面点击立即购买按钮来进行在线支付，请注意在支付页面的附加信息中填写联系方式。</p>
    <a href="{{url('products')}}"><button type="button" class="btn btn-lg btn-primary">现在转到产品页面</button></a>



</div>
</div>
</section>

@stop