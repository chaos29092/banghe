@extends('product.product_master')

@section('title')
    <title>邦禾 - 心脑血管检测套餐</title>
    <meta name="keywords" content="邦禾 - 心脑血管检测套餐">
    <meta name="description" content="邦禾 - 心脑血管检测套餐">
@stop

@section('productTitle')
    心脑血管检测套餐
@stop

@section('productImage')
    <img alt="dna" src="{{asset('img/products/dna.jpg')}}" width="700" height="700">
@stop

@section('piao')
    4412
@stop

@section('productDescription')
    <p>针对心脑血管基因的检测</p>
@stop

@section('price')
    <span class="price-old">￥3000</span>
    <span class="price">￥1600.00</span>
@stop

@section('buy')
    <a href="http://pay3.chinabank.com.cn/Payto?v_mid=23135777&v_id=198831&prdesc=banghe DNA xinnao&quantity=1&v_amount=1600&productname=banghe DNA xinnao"><button type="button" class="btn btn-lg btn-danger">现在购买</button></a>
@stop

@section('fullDescription')
    <h4>检测项目</h4>
    <table class="table table-bordered text-center">
        <tr>
            <td>产品系列</td>
            <td>检测项目</td>
        </tr>
        <tr>
            <td>心脑血管检测套餐（6项）</td>
            <td>急性心肌梗塞，高血压，高血脂，脑中风，老年性痴呆，冠心病</td>
        </tr>
    </table>

    <h4>产品介绍</h4>
    <p><strong>心脑血管疾病——健康头号杀手</strong></p>
    <p>心脑血管疾病具有“发病率高、致残率高、死亡率高、复发率高、并发症多”即“四高一多”，的特点。目前，我国心脑血管疾病患者已经超过2.7亿人！我国每年死于心脑血管疾病近300万人！占我国每年总死亡病因的51%，每11秒就有1人因心脑血管疾病而死亡。</p>
    <p>随着人们生活水平的提高，饮食结构发生变化，心脑血管疾病也随之上升，正在向30-40岁的人群蔓延，尤其是高血压、冠心病、心肌梗塞、脑梗塞，已成为中青年人最常见的疾病，发病逐步趋向年轻化。</p>
    <p><strong>心脑血管疾病——重在预防</strong></p>
    <p>心脑血管疾病对人体的损害是隐秘的、逐渐的、全身性的，早期没有明显的临床症状。因此，从健康角度来讲，唯有预防才是万全之策，高明之举。早预防，早安心。</p>
@stop
