@extends('product.product_master')

@section('title')
    <title>体验套餐 - 上海邦禾生物技术有限公司</title>
    <meta name="keywords" content="邦禾 - 体验套餐 上海邦禾生物技术有限公司">
    <meta name="description" content="邦禾 - 体验套餐 上海邦禾生物技术有限公司">
@stop

@section('productTitle')
    体验套餐
@stop

@section('productImage')
    <img alt="体验套餐" src="{{asset('img/products/dna.jpg')}}" width="700" height="700">
@stop

@section('piao')
    2155
@stop

@section('productDescription')
    <p>针对常见肿瘤基因的检测</p>
@stop

@section('price')
    <span class="price-old">￥1600</span>
    <span class="price">￥800.00</span>
@stop

@section('buy')
    <a href="http://pay3.chinabank.com.cn/Payto?v_mid=23135777&v_id=198831&prdesc=banghe DNA tiyan&quantity=1&v_amount=800&productname=banghe DNA tiyan"><button type="button" class="btn btn-lg btn-danger">现在购买</button></a>
@stop

@section('fullDescription')
    <h4>检测项目</h4>
    <table class="table table-bordered text-center">
        <tr>
            <td>产品系列</td>
            <td>检测项目</td>
        </tr>
        <tr>
            <td>常见肿瘤基因检测（任选2项）</td>
            <td>女性：乳腺癌，宫颈癌，卵巢癌，肝癌，胃癌，结肠癌，肺癌，膀胱癌 <br/>
                男性：肝癌，胃癌，结肠癌，肺癌，前列腺癌，膀胱癌
            </td>
        </tr>
    </table>

    <h4>产品介绍</h4>
    <p>癌症（Cancer），亦称恶性肿瘤（Malignant neoplasm），为由控制细胞生长增殖机制失常而引起的疾病。癌细胞除了生长失控外，还会局部侵入周遭正常组织甚至经由体内循环系统或淋巴系统转移到身体其他部分。</p>
    <p>我国癌症发病形势严峻，发病率与死亡率呈持续上升趋势，每年新发癌症病例约350万，因癌症死亡约250万，每6分钟就有一人被确诊为癌症，每天有8550人成为癌症患者，每7-8人中就有一人死于癌症。</p>
    <p><strong>早发现，早预防，早治疗是防治肿瘤的关键。</strong></p>
    <p>随着人们生活方式的改变以及环境恶化等诸多因素的影响，肿瘤的发生呈上升和年轻化趋势。临床经验表明，由于肿瘤的早期症状不明显，很多肿瘤发现时，已属于中晚期，错过了最佳的治疗时机。据世界卫生组织最新的统计数据表明，肿瘤若能被早期发现，5年生存率可高达90%以上，但如果在晚期发现，5年生存率不足10%。因此预防与早期发现是防治肿瘤的关键。</p>
    <p><strong>肿瘤疾病基因检测，肿瘤最早的预警！</strong></p>
    <p>癌症不仅仅是一种生活方式病，也是一种基因病，具有一定的家族聚集性和遗传性。肿瘤基因检测是最早的预警，通过检测肿瘤易感基因，可以及时了解自己的基因信息，进而采取针对性的预防措施，如：改善不良生活习惯，远离有害因素等，可有效预防高风险癌症。</p>
@stop
