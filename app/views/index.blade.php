@extends('master')

@section('title')
    <title>天赐基因检测</title>
    <meta name="keywords" content="天赐 基因检测 预防癌症">
    <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
    <meta name="author" content="itembridge.com">
@stop

@section('content')

<section id="main">
<article class="content">
<div class="container">

<div class="row">

    <div class="bottom-padding col-sm-6 col-md-6">
        <img src="img/tianci.jpg" class="img-responsive img-rounded center-block" alt=""/>
    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        <h4>在左侧的家族图谱中，有多少人会有患病概率？</h4>
        <p>答案： <strong>6个</strong></p>

        <p>采集基因样本，进行基因筛查，出具基因报告，专业解读报告，并提供专家指导服务。</p>
        <p>受检者收到基因报告后，由专业老师为受检者提供一对一的报告讲解：让受检者更清晰的了解自己的遗传体质特征；不同的年龄段健康或教育的重点在哪里；具体应怎样执行，如饮食怎样调理，怎样加强保健，怎样教育宝宝等。具体内容视受检者所选筛查项而定。</p>
        <h4>广告词</h4>
        <p>收到基因报告后，由检测机构为受检者提供为期一年的免费服务，具体内容视筛查项目而定。包括：</p>

        <a href="{{asset('process')}}"><button type="button" class="btn btn-primary">查看检测流程</button></a>
    </div>
</div>

<div class="row" id="what">
    <div class="bottom-padding col-sm-12 col-md-12">
        <div class="panel-group one-open" id="accordion">
            <div class="panel panel-default panel-bg active" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            体验套餐 —————————— <span>880元</span>
                        </a>
                    </div>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p class="col-md-6">男性：肝癌，胃癌，结肠癌，肺癌，前列腺癌，膀胱癌</p>
                        <p class="col-md-6">女性: 乳腺癌，宫颈癌，卵巢癌，肝癌，胃癌，结肠癌，肺癌，膀胱癌</p>
                        <a href="{{asset('process')}}"><button type="button" class="btn btn-primary">立即购买</button></a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            白银套餐 —————————— <span>2280元</span>
                        </a>
                    </div>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p class="col-md-6">男性：肝癌，胃癌，结肠癌，肺癌，前列腺癌，膀胱癌</p>
                        <p class="col-md-6">女性：乳腺癌，宫颈癌，卵巢癌，肝癌，胃癌，结肠癌，肺癌，膀胱癌</p>
                        <p>加上心血管套餐：急性心肌梗塞；高血压；高血脂；脑中风；老年性痴呆；冠心病</p>
                        <a href="{{asset('process')}}"><button type="button" class="btn btn-primary">立即购买</button></a>

                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            黄金套餐 —————————— <span>3680元</span>
                        </a>
                    </div>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>男性：</p>
                            <ul>
                                <li>急性心肌梗塞、高血压、高血脂、脑中风、老年性痴呆、冠心病</li>
                                <li>肝癌、胃癌、结肠癌、肺癌、前列腺癌、膀胱癌</li>
                                <li>糖尿病、成人肥胖体质、肝脏药物代谢功能</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p>女性：</p>
                            <ul>
                                <li>急性心肌梗塞、高血压、高血脂、脑中风、老年性痴呆、冠心病</li>
                                <li>乳腺癌、肝癌、胃癌、结肠癌、宫颈癌、卵巢癌、肺癌、膀胱癌</li>
                                <li>糖尿病、成人肥胖体质、肝脏药物代谢功能</li>
                            </ul>
                        </div>
                        <a href="{{asset('process')}}"><button type="button" class="btn btn-primary">立即购买</button></a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            铂金套餐 —————————— <span>12800元</span>
                        </a>
                    </div>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                       <p>常见疾病易感基因检测	86种常见病（不包含肿瘤）</p>
                       <p>肿瘤易感基因检测	102种肿瘤</p>
                       <a href="{{asset('process')}}"><button type="button" class="btn btn-primary">立即购买</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="title-box text-center col-sm-12 col-md-12">
        <h1 class="title">关于我们</h1>
    </div>

    <div class="bottom-padding col-sm-12 col-md-12">
        <p>上海邦禾生物科技有限公司坐落于中国（上海）自由贸易实验区，注册资金一亿元人民币，是一家专业从事基因检测的高科技企业。</p>

        <p>邦禾基因检测平台-生物芯片上海国家工程研究中心，代表着中国在生物芯片基因检测领域的最高科技权威。生物芯片上海国家工程研究中心由上海生命科学院、国家人类基因组南方中心、复旦大学、交通大学等股东单位组建而成，国家发改委委员会于2003年3月正式批复成立，总投资2.9亿元人民币，是我国投资规模最大的生物技术中心之一，也是我国在生物芯片领域研发的代表单位。</p>

        <p>中心聚集众多位博士、硕士、留学归国人员等尖端科技人员，获得国家863计划、973计划、上海市重大项目等科研资助逾6000万元。</p>
        <a href="#price"><button type="button" class="btn btn-primary">查看套餐</button></a>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="title-box text-center col-sm-12 col-md-12">
            <h1 class="title">联系我们</h1>
        </div>

        <div class="map-box col-sm-12 col-md-12">
            <div class=" col-sm-6 col-md-6">
                <address>
                    <div class="title">Address</div>
                    49 Archdale, 2B Charleston, New York City, USA
                </address>
                <div class="row">
                    <address class="col-sm-6 col-md-6">
                        <div class="title">Phones</div>
                        <div>Support: +777 (100) 1234</div>
                        <div>Sales manager: +777 (100) 4321</div>
                        <div>Director: +777 (100) 1243</div>
                    </address>
                    <address class="col-sm-6 col-md-6">
                        <div class="title">Email Addresses</div>
                        <div>Support: <a href="mailto:support@example.com">support@example.com</a></div>
                        <div>Sales manager: <a href="mailto:manager@example.com">manager@example.com</a></div>
                        <div>Director: <a href="mailto:chief@example.com">chief@example.com</a></div>
                    </address>
                </div>
            </div>

        </div>
    </div>
</article>
</section>

@stop