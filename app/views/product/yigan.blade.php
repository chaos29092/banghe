@extends('product.product_master')

@section('title')
    <title>邦禾 - 常规检测套餐</title>
    <meta name="keywords" content="邦禾 - 常规检测套餐">
    <meta name="description" content="邦禾 - 常规检测套餐">
@stop

@section('productTitle')
    常规检测套餐
@stop

@section('productImage')
    <img alt="dna" src="{{asset('img/products/dna.jpg')}}" width="700" height="700">
@stop

@section('piao')
    3238
@stop

@section('productDescription')
    <p>常规检测套餐，包含多项常规检测项目</p>
@stop

@section('price')
    <span class="price-old">￥4600</span>
    <span class="price">￥2600.00</span>
@stop

@section('buy')
    <a href="http://pay3.chinabank.com.cn/Payto?v_mid=23135777&v_id=198831&prdesc=banghe DNA yigan&quantity=1&v_amount=2600&productname=banghe DNA yigan"><button type="button" class="btn btn-lg btn-danger">现在购买</button></a>
@stop

@section('fullDescription')
    <h4>检测项目</h4>
    <table class="table table-bordered text-center">
        <tr>
            <td>产品系列</td>
            <td colspan="2">检测项目</td>
        </tr>
        <tr>
            <td rowspan="2">常规检测套餐</td>
            <td>女性17项</td>
            <td>乳腺癌，宫颈癌，卵巢癌，肝癌，胃癌，结肠癌，肺癌，膀胱癌，急性心肌梗塞，高血压，高血脂，脑中风，老年性痴呆，冠心病，糖尿病，成人肥胖体质，肝脏药物代谢功能</td>
        </tr>
        <tr>
            <td>男性15项</td>
            <td>肝癌，胃癌，结肠癌，肺癌，前列腺癌，膀胱癌，急性心肌梗塞，高血压，高血脂，脑中风，老年性痴呆，冠心病，糖尿病，成人肥胖体质，肝脏药物代谢功能</td>
        </tr>
    </table>

    <h4>产品介绍</h4>
    <p><strong>疾病重在预防，预防从基因检测开始</strong></p>
    <p>所谓“防患于未然”，大多数人理解为每年做一次体检就够了，体检往往作为最主要的预防手段。殊不知，体检只是用来早期发现疾病的，而不是用来预防疾病的。体检发现问题时，疾病已经发生了，并在身体里根深蒂固，该去治疗而非预防。还有许多人把坚持服用保健品作为疾病预防的重要手段，但几乎没有人是在专业人员的指导下使用保健品的，保健品的使用基本是随大流，跟风，跟广告走。这其实是一种非常盲目的做法。</p>
    <p>基因检测可以帮你预先发现埋藏在体内的地雷，从根本上预知未来健康问题发生的风险，有针对性地预防肿瘤等重大疾病，避开可能引爆疾病的条件，让您再疾病发生之前就能进行有效的防范，减少不必要的体检项目和频次，只做有针对性的健康体检，有助于早发现、早预防、早治疗。面对社会上铺天盖地的保健品广告，也不用再迷惑了，通过基因检测，得到您身体的分子级说明书，根据自身特点，选择有针对性的保健品。</p>
@stop
