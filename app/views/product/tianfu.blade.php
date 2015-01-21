@extends('product.product_master')

@section('title')
    <title>邦禾 - 儿童天赋基因检测</title>
    <meta name="keywords" content="邦禾 - 儿童天赋基因检测">
    <meta name="description" content="邦禾 - 儿童天赋基因检测">
@stop

@section('productTitle')
    儿童天赋基因检测
@stop

@section('productImage')
    <img alt="tianfu" src="{{asset('img/products/tianfu.jpg')}}" width="700" height="700">
@stop

@section('piao')
    3504
@stop

@section('productDescription')
    <p>针对儿童天赋基因检测</p>
@stop

@section('price')
    <span class="price-old">￥3500</span>
    <span class="price">￥1800.00</span>
@stop

@section('buy')
    <a href="http://pay3.chinabank.com.cn/Payto?v_mid=23135777&v_id=198831&prdesc=banghe DNA tianfu&quantity=1&v_amount=1800&productname=banghe DNA tianfu"><button type="button" class="btn btn-lg btn-danger">现在购买</button></a>
@stop

@section('fullDescription')
    <h4>检测项目</h4>
    <table class="table table-bordered text-center">
        <tr>
            <td>产品系列</td>
            <td>检测项目</td>
        </tr>
        <tr>
            <td>儿童天赋基因检测</td>
            <td>运动耐力，运动爆发力，肥胖体质，智商，记忆能力，语言能力，认知能力，歌唱能力，专注力</td>
        </tr>
    </table>

    <h4>产品介绍</h4>
    <p><strong>儿童天赋基因检测，让您的孩子赢在起跑线。</strong></p>


@stop
