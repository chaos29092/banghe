@extends('product.product_master')

@section('title')
    <title>邦禾 - 男性健康套餐</title>
    <meta name="keywords" content="邦禾 - 男性健康套餐">
    <meta name="description" content="邦禾 - 男性健康套餐">
@stop

@section('productTitle')
    男性健康套餐
@stop

@section('productImage')
    <img alt="dna" src="{{asset('img/products/dna.jpg')}}" width="700" height="700">
@stop

@section('piao')
    5422
@stop

@section('productDescription')
    <p>针对男性健康基因的检测</p>
@stop

@section('price')
    <span class="price-old">￥3000</span>
    <span class="price">￥1600.00</span>
@stop

@section('buy')
    <a href="http://pay3.chinabank.com.cn/Payto?v_mid=23135777&v_id=198831&prdesc=banghe DNA man&quantity=1&v_amount=1600&productname=banghe DNA man"><button type="button" class="btn btn-lg btn-danger">现在购买</button></a>
@stop

@section('fullDescription')
    <h4>检测项目</h4>
    <table class="table table-bordered text-center">
        <tr>
            <td>产品系列</td>
            <td>检测项目</td>
        </tr>
        <tr>
            <td>男性健康套餐</td>
            <td>肝癌，胃癌，结肠癌，肺癌，膀胱癌，前列腺癌</td>
        </tr>
    </table>

    <h4>产品介绍</h4>
    <p><strong>守护家人，从基因检测开始！</strong></p>
    <p>近几年，我国中年男性患上各类慢性疾病的人数在不断上升。中年男性在工作中压力都很大，是企业的中流砥柱。在生活中又有吸烟、酗酒等问题。这样的生活习惯，很容易引起肿瘤、心脑血管等疾病的发生。</p>
    <p>加班，晚睡，焦虑，营养不良，高辐射——长期生活在这样的状态下，久而久之就会陷入“亚健康”的状态，亚健康的初期症状并不明显，常常被人忽略。但长期的积压过后所凸显的病症，都如“过劳死”搬惊人。亚健康危机时代的到来，你有没有失眠、乏力、无食欲、易疲劳、易发怒？如果有，就赶快来做基因检测吧！</p>
    <p>基因检测可以让您掌握自己的生命密码，正确的使用生命。我们必须知道自己身体的使用说明书，才能让自己长寿。</p>
    <p>基因检测可以很清楚地告诉您和其他人比，更容易患哪些疾病，是什么原因引起疾病发生，帮助您及时采取有针对性的预防措施，降低患病风险，发挥趋利避害的作用。</p>
@stop
