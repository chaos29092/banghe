@extends('product.product_master')

@section('title')
    <title>邦禾 - 全谱检测套餐</title>
    <meta name="keywords" content="邦禾 - 全谱检测套餐">
    <meta name="description" content="邦禾 - 全谱检测套餐">
@stop

@section('productTitle')
    全谱检测套餐
@stop

@section('productImage')
    <img alt="dna" src="{{asset('img/products/dna.jpg')}}" width="700" height="700">
@stop

@section('piao')
    2699
@stop

@section('productDescription')
    <p>全谱检测套餐，包含常见疾病86种，肿瘤易感102种</p>
@stop

@section('price')
    <span class="price-old">￥12900</span>
    <span class="price">￥6900.00</span>
@stop

@section('buy')
    <a href="http://pay3.chinabank.com.cn/Payto?v_mid=23135777&v_id=198831&prdesc=banghe DNA quanpu&quantity=1&v_amount=6900&productname=banghe DNA quanpu"><button type="button" class="btn btn-lg btn-danger">现在购买</button></a>
@stop

@section('fullDescription')
    <h4>检测项目</h4>
    <table class="table table-bordered text-center">
        <tr>
            <td colspan="2">检测项目</td>
        </tr>
        <tr>
            <td width="100">骨骼系统</td>
            <td>易感型骨关节炎，骨质疏松症，椎间盘疾病，牛皮癣关节炎，先天性脊柱侧凸</td>
        </tr>
        <tr>
            <td width="100">呼吸系统</td>
            <td>哮喘，易感</td>
        </tr>
        <tr>
            <td width="100">免疫系统</td>
            <td>丙型肝炎病毒易，乙型肝炎病毒，严重流行性感冒，自身免疫病易感6型，
                自身免疫性疾病，登革病毒，细菌血症，曲霉病，
                人类免疫缺陷病毒，结核分枝杆菌，先天性巨结肠症，IgE反应,遗传性过敏症，
                麻风病，军团菌病，系统性红斑狼疮，溶血尿毒症综合征，
                恶性高热易感1型，恶性高热易感5型，温和型疟疾 ，疟疾，
                自身免疫性甲状腺疾病……
            </td>
        </tr>
        <tr>
            <td>内分泌代谢系统</td>
            <td>1型糖尿病 非胰岛素依赖型糖尿病，肥胖，易感性尿酸肾结石，
                甲状腺毒性周期性麻痹症，糖尿病微血管并发症……
            </td>
        </tr>
        <tr>
            <td>皮肤系统</td>
            <td>白癜风伴发系统免疫性疾病，银屑病易感，牛皮癣关节炎
            </td>
        </tr>
        <tr>
            <td>其他系统</td>
            <td>移植物抗宿主病，急性酒精不耐受，酒精依赖症，烟草成瘾，
                硫脲味觉，严重皮肤副反应，库鲁病，X-连锁亚斯伯格综合症
            </td>
        </tr>
        <tr>
            <td>神经及精神系统</td>
            <td>精神分裂症，重性抑郁障碍，帕金森病，"阿尔茨海默病
                （老年性痴呆）"，
                自闭症，X连锁自闭症，多发性硬化病，先兆或无先兆偏头痛，
                睡眠相位后移综合征，神经性贪食症，失读症，主要情感性疾病，
                注意力不足过动症……
            </td>
        </tr>
        <tr>
            <td>生殖系统</td>
            <td>未足月胎膜早破，反复性妊娠丢失
            </td>
        </tr>
        <tr>
            <td>视觉系统</td>
            <td>正常眼压性青光眼</td>
        </tr>
        <tr>
            <td>消化系统</td>
            <td>易感型先天性巨结肠病，易感型幽门螺杆菌感染，易感慢性胰腺炎，易感型乳糜泻，
                炎症性肠病/克罗恩病 IV型胆囊疾病……
            </td>
        </tr>
        <tr>
            <td>心脑血管</td>
            <td>冠状动脉心脏病，缺血性中风易患性，中风易患性，心肌梗塞，
                高血压，原发性高脂血症(高血脂），大脑内出血，川崎病，
                靜止心率变异型
            </td>
        </tr>
        <tr>
            <td>血液系统</td>
            <td>再生障碍性贫血</td>
        </tr>
        <tr>
            <td>部分常见肿瘤易感</td>
            <td>前列腺癌，遗传性乳腺癌，食管癌，肝癌，
                肺癌，急性骨髓性白血病，结肠癌，易感1型，肾细胞癌，
                淋巴管平滑肌瘤病，结肠癌，胃癌，宫颈癌，
                淋巴管平滑肌瘤病，膀胱癌，髓母细胞瘤，乳头状肾细胞癌，
                促肾上腺皮质激素细胞腺瘤，催乳素细胞腺瘤，生长激素细胞腺瘤，霍奇金淋巴瘤，
                遗传性肾上腺皮质癌，小儿毛细管血管瘤，胰腺癌，多发性骨髓瘤，
                软骨肉瘤，嗜铬细胞瘤，乳头状甲状腺癌，骨源性肉瘤，
                异软骨瘤病，肾母细胞瘤，睾丸肿瘤，Muir-Torre综合征，
                卵巢癌，VonHippel-Lindau综合征……
            </td>
        </tr>
    </table>

    <h4>产品介绍</h4>
    <p><strong>包含常见疾病86种，肿瘤易感102种</strong></p>
@stop
