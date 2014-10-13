@extends('master')

@section('title')
    <title>天赐基因检测</title>
    <meta name="keywords" content="天赐 基因检测 预防癌症">
    <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
    <meta name="author" content="itembridge.com">
@stop

@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/slide_1.jpg" class="img-responsive" alt="...">

            <div class="carousel-caption">
                <h3>基因检测技术能给您带来什么？</h3>

                <ul class="list-unstyled">
                    <li>美国家族性结肠癌发病率下降了百分之90，死亡率下降了百分之70</li>
                    <li>美国的乳腺癌的可治愈率达到百分之96以上</li>
                    <li>美国的卵巢癌5年内生存率提高了百分之90</li>
                    <li>美国的肝癌患者的5年生存率可以从0%提高到46.4%</li>
                </ul>
            </div>
        </div>
        <div class="item">
            <img src="img/slide_2.jpg" alt="...">

            <div class="carousel-caption">
                <h3>发现隐患，刻不容缓！</h3>

                <p>癌症发现为什么总是晚期？定期体检很难发现早期癌症。。。</p>
                <p>而邦禾基因检测，能最早限度的清楚您身体的隐患，然后进行针对性的防范。</p>
            </div>
        </div>
        <div class="item">
            <img src="img/slide_3.jpg" alt="...">

            <div class="carousel-caption">
                <h3>癌症，是基因突变的累积</h3>

                <p>单个细胞突变==>米粒大小的肿瘤,8-10年，多数无症状</p>
                <p>米粒==>杏仁，半年到一年，甚至更短， 杏仁==>晚期，2-6个月</p>
                <p>不检测一下，你能放心吗？</p>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="main">
<article class="content">
<div class="container">
<div class="row" id="what">
    <div class="title-box text-center col-sm-12 col-md-12">
        <h1 class="title">我们能做什么</h1>
    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        {{--<blockquote>--}}
            {{--<footer>发现天赋，而非创造天赋</footer>--}}
        {{--</blockquote>--}}
        {{--<p>每个人都是独一无二的天才，<strong>天骄系列基因检测</strong>，发现您的孩子深藏在基因中的天赋。当初如果早就知道自己的天赋所在，还会走那么多错误的路来尝试吗？我，不要下一代泯然众人！</p>--}}


        <p><strong>天赐系列基因检测</strong>，通过基因检测技术，帮您预防疾病，改善生活习惯，更好的保养自己。</p>
        <blockquote>
            <footer>预防大于治疗</footer>
        </blockquote>
        <p>为什么体检发现的癌症总是晚期？</p>
        <p>我究竟能不能抽烟？甚至是闻二手烟？</p>
        <p>我究竟能不能喝酒？甚至是啤酒？</p>
        <p>我究竟是不是必须购买商业保险？</p>
        <p>我究竟...</p>

        <p>命由天定，事在人为。基因是我们无法选择与改变的，我们能做的就是了解并接受自己的基因，调整生活方式，使先天与后天相辅相成，科学提升我们的生命品质与生活体验。

          基因检测即了解基因信息的手段。通过采集受检者的DNA样本，运用先进的基因芯片和测序技术，检测与疾病或性格、智力等相关的基因，获知受检者在相关方面的遗传特征。</p>
        <p>你，拥有自己的分子级生命说明书吗？</p>
    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        <div class="panel-group one-open" id="accordion">
            <div class="panel panel-default panel-bg active" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            基因检测与重大疾病预防
                        </a>
                    </div>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>心脑血管疾病、肿瘤、糖尿病已经成为威胁人类健康的三大杀手，这些疾病都与先天的遗传基因有着直接关系，都是由先天遗传基因+后天生活方式和生活环境共同作用形成的。</p>
                        <p>我国患高血压人群已超过1.6亿，糖尿病人6500万，每12秒钟就有1个中国人死于心脑血管病！中国近五年癌症患者高达750万人，每年约有160万人死于癌症。</p>
                        <p>哈佛公共卫生学院疾病预防中心的研究表明，通过提前基因检测预知，有效改善生活方式，80%的心脏病与糖尿病，70%的中风以及50%的癌症是可以避免的！</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            基因检测与个性化用药
                        </a>
                    </div>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>据统计，中国每年5000多万住院病人中，至少有250万人入院治疗与药物毒副作用有关，其中50万人属于严重不良反应，因此而致死的人数每年约有19．2万人，比传染病致死的人数高出数倍。</p>
                        <p>据统计资料显示，我国死于药物不良反应的每年约有20万人。仅上海市每年就有1万人因吃错药而死亡。</p>
                        <p>2005年春晚21位无声的天使表演的《千手观音》震撼了中国，也震惊了世界。这21位无声的天使中仅只有三人是先天性耳聋，18人都是由于后天药物的毒副作用而造成的终身性耳聋。</p>
                        <p>我国100万聋哑儿童中约50%是使用抗生素所致！如果孩子携带药物性耳聋基因，哪怕只是一次使用，在正常剂量内就可以造成孩子再也听不到声音！</p>
                        <p>千人一药的用药模式对人体的危害是相当大的，不仅产生药物毒副作用，损伤内脏器官；甚至致残致亡。
                           硝酸甘油是抗心绞痛的首选药物。然而该药物治疗心绞痛的个体差异很大，对有些人毫无效果。通过基因检测，如果心绞痛患者该基因缺陷，那么硝酸甘油治疗对他可能无效。</p>
                           <p><strong>目前通过基因筛查已经能够对部分肿瘤用药、化放疗用药、心脑血管疾病用药及抗生素用药等实行个性化用药检测。</strong></p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            基因检测与生活方式
                        </a>
                    </div>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><strong>通用的未必正确  合理的未必合适  有效的未必益</strong></p>
                        <p>多瓜果蔬菜——适合你吗？</p>
                        <p>多鱼少肉——会不会害了你？</p>
                        <p>提高免疫力—— 一定会让你远离疾病吗？</p>
                        <p>基因检测避免人们盲目补充保健品：</p>
                        <p>随着生活水平的提高，人们越来越注重健康，保健品也成了注重生活品质人群的必须品，但保健品并不是可以盲目补充的。例如，带有肝硬化疾病易感基因的人群，是不可以长期补充铁质类的保健品，因为铁质会诱发肝硬化疾病的发生；带有红斑狼疮的疾病易感基因人群，不可以大量补充蛋白质……如果不了解身体的根本，长期盲目服用保健品，后果难以估计……</p>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            基因检测与临床检测
                        </a>
                    </div>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                       <p>基因检测可以有效避免临床误诊：</p>
                       <p>联合国世界卫生组织2000年做了一项调查，发现全球误诊率在28%-44%，也就是说，平均3-4个人去看病就有一个人遭遇到误诊！即使是很有钱的人或者本身就是医学专家也无法避免。临床医学难免会有些误诊的发生，如我国拥有35亿资产的著名企业家王均瑶38岁死于直肠癌。直肠癌是所有癌症里最容易医治的，换个直肠只需要几十万。可悲的是上帝跟他开了一个很大的玩笑，他的直肠癌前期一直当作胃炎医治了8年，因而错过了最佳治疗期，导致悲剧的发生。再比如红斑狼疮的早期症状为感冒、胃痛等，如果不做基因检测，很容易当作感冒、胃病医治……</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="title-box text-center col-sm-12 col-md-12">
        <h1 class="title">天赐基因检测</h1>
    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        <img src="img/tianci.jpg" class="img-responsive img-rounded center-block" alt=""/>
    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        <p>我们的服务内容：</p>

        <p>采集基因样本，进行基因筛查，出具基因报告，专业解读报告，并提供专家指导服务。</p>
        <p>受检者收到基因报告后，由专业老师为受检者提供一对一的报告讲解：让受检者更清晰的了解自己的遗传体质特征；不同的年龄段健康或教育的重点在哪里；具体应怎样执行，如饮食怎样调理，怎样加强保健，怎样教育宝宝等。具体内容视受检者所选筛查项而定。</p>
        <p>收到基因报告后，由检测机构为受检者提供为期一年的免费服务，具体内容视筛查项目而定。包括：</p>
        <ul>
            <li><strong>定期饮食调理：</strong>每三个月1次，为受检者提供营养评估及饮食调整方案。</li>
            <li><strong>24小时紧急咨询：</strong>可随时拨打专业老师的电话，咨询相关问题。</li>
            <li><strong>就医辅助：</strong>提供个性化的体检方案、常见健康隐患的就医方案、个性化的用药方案等。</li>
            <li><strong>教育咨询：</strong>发生任何与教育相关的疑虑时，都可咨询专业老师的解决建议。</li>
        </ul>
        <a href="{{asset('process')}}"><button type="button" class="btn btn-primary">查看检测流程</button></a>
    </div>
</div>

<div class="row">
    <div class="title-box text-center col-sm-12 col-md-12">
        <h1 class="title">领先的技术</h1>
    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        <p>上海邦禾生物科技有限公司坐落于中国（上海）自由贸易实验区，注册资金一亿元人民币，是一家专业从事基因检测的高科技企业。</p>

        <p>邦禾基因检测平台-生物芯片上海国家工程研究中心，代表着中国在生物芯片基因检测领域的最高科技权威。生物芯片上海国家工程研究中心由上海生命科学院、国家人类基因组南方中心、复旦大学、交通大学等股东单位组建而成，国家发改委委员会于2003年3月正式批复成立，总投资2.9亿元人民币，是我国投资规模最大的生物技术中心之一，也是我国在生物芯片领域研发的代表单位。</p>

        <p>中心聚集众多位博士、硕士、留学归国人员等尖端科技人员，获得国家863计划、973计划、上海市重大项目等科研资助逾6000万元。</p>
        <a href="#price"><button type="button" class="btn btn-primary">查看套餐</button></a>
    </div>

    <div class="bottom-padding col-sm-6 col-md-6">
        <img src="img/tianjiao.jpg" class="img-responsive img-rounded center-block" alt=""/>
    </div>
</div>



<div class="row bottom-padding bottom-padding-mini">
    <div class="title-box text-center col-sm-12 col-md-12">
        <h1 class="title">您能得到的服务</h1>
    </div>

    <div class="big-services-box col-sm-4 col-md-4">

            <div class="big-icon bg" data-appear-animation="fadeInUp"><i class="fa fa-plus"></i></div>
            <h4 class="title">基因检测</h4>

            <div class="text-small">最先进的基因检测技术，帮助您得到自己的分子级生命说明书
            </div>

    </div>
    <!-- .services-box-two -->

    <div class="big-services-box col-sm-4 col-md-4">

            <div class="big-icon bg" data-appear-animation="fadeInUp"><i class="fa fa-book"></i></div>
            <h4 class="title">分析报告</h4>

            <div class="text-small">根据您的基因检测结果，由专家分析，专属于您的身体分析报告，包含系统化的养生，饮食，运动，治疗建议等
            </div>

    </div>
    <!-- .services-box-two -->

    <div class="big-services-box col-sm-4 col-md-4">

            <div class="big-icon bg" data-appear-animation="fadeInUp"><i class="fa fa-users"></i></div>
            <h4 class="title">后期服务</h4>

            <div class="text-small">终生免费专家咨询，强大的社区，让您的人生之路更加健康幸福
            </div>

    </div>
    <!-- .services-box-two -->
</div>
</div>

<div class="full-width-box bottom-padding">
    <div class="fwb-bg bg-error"></div>

    <div class="container">
        <div class="row">
            <div class="content-box white col-sm-6 col-md-6">
                <div>与邦禾近距离接触</div>
                <h2 class="title light"><strong>邦禾基因检测</strong>视频</h2>

                <p class="description">
                    We added more than 80 items to the standard page design.<br>
                    You can form the page yourself by placing any information<br>
                    you want – graphs, tables, buttons, slides, animated
                </p>
                <a href="{{asset('buy')}}"><button class="btn btn-white btn-default">现在购买</button></a>
                <br><br>
            </div>
            <div class="images-box col-sm-6 col-md-6">
                <img src="img/content/promo-slider.png" width="568" height="351" alt="">
            </div>
        </div>
    </div>
</div>
<!-- .full-width-box -->

<div class="container">
<div class="bottom-padding bottom-padding-mini">
    <div class="title-box text-center">
        <h1 class="title">画廊</h1>
    </div>

    <div class="portfolio">


        <div class="row filter-elements">
            <div class="web-design col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-1.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Morbi non lacus ac sapien molestie</h3>

                        <div class="description">Web design</div>
                    </div>
                </a>
            </div>
            <div class="graphic-design col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-2.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Sed at turpis tortor bibendum </h3>

                        <div class="description">Web design</div>
                    </div>
                </a>
            </div>
            <div class="ecommerce col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-3.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Mauris quis sapien mass</h3>

                        <div class="description">Web design</div>
                    </div>
                </a>
            </div>
            <div class="web-design col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-4.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Donec pulvinar pulvinar arcu</h3>

                        <div class="description">Other</div>
                    </div>
                </a>
            </div>
            <div class="web-design col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-5.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Proin faucibus pretium</h3>

                        <div class="description">Web design</div>
                    </div>
                </a>
            </div>
            <div class="graphic-design col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-6.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Pellentesque in dui mauris</h3>

                        <div class="description">Other</div>
                    </div>
                </a>
            </div>
            <div class="ecommerce col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-7.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Vivamus auctor metus porta</h3>

                        <div class="description">Web design</div>
                    </div>
                </a>
            </div>
            <div class="ecommerce col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-8.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Quisque nec lorem vel metus ultrices</h3>

                        <div class="description">Web design</div>
                    </div>
                </a>
            </div>
            <div class="web-design col-xs-12 col-sm-4 col-md-4">
                <a href="/portfolio-single.html" class="work">
                    <img src="img/content/portfolio-9.jpg" width="370" height="270" alt="">
                    <span class="shadow"></span>

                    <div class="bg-hover"></div>
                    <div class="work-title">
                        <h3 class="title">Proin faucibus pretium</h3>

                        <div class="description">Web design</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bottom-padding" id="price">
    <div class="title-box text-center">
        <h1 class="title">天赐基因检测套餐</h1>
    </div>
    <p>我们有多种灵活的套餐可供选择，总有一种适合您</p>
    <br>

    <div class="pricings row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="pricing">
                <div class="title"><a href="#">套餐1</a></div>
                <div class="price-box">
                    <div class="icon icon-60 pull-right border circle">
                        <i class="fa fa-bookmark-o"></i>
                    </div>
                    <div class="starting">Starting at</div>
                    <div class="price">$199<span>/month</span></div>
                </div>
                <ul class="options">
                    <li><span><i class="fa fa-check"></i></span>Responsive Design</li>
                    <li><span><i class="fa fa-check"></i></span>Color Customization</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>HTML5 &amp; CSS3</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Styled elements</li>
                    <li><span><i class="fa fa-check"></i></span>Easy Setup</li>
                </ul>
                <div class="bottom-box">
                    <a href="#" class="more">Read more <span class="fa fa-angle-right"></span></a>

                    <div class="rating-box">
                        <div style="width: 80%" class="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="73px" height="12px" viewBox="0 0 73 12" enable-background="new 0 0 73 12" xml:space="preserve">
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5"></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 "></polygon>
					</svg>
                        </div>
                    </div>
                    <button class="btn btn-default btn-lg">现在购买</button>
                </div>
            </div>
            <!-- .pricing -->
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="pricing prising-info">
                <div class="title"><a href="#">Second Package</a></div>
                <div class="price-box">
                    <div class="icon icon-60 pull-right border circle">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="starting">Starting at</div>
                    <div class="price">$299<span>/month</span></div>
                </div>
                <ul class="options">
                    <li><span><i class="fa fa-check"></i></span>Responsive Design</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Color Customization</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>HTML5 &amp; CSS3</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Styled elements</li>
                    <li><span><i class="fa fa-check"></i></span>Easy Setup</li>
                </ul>
                <div class="bottom-box">
                    <a href="#" class="more">Read more <span class="fa fa-angle-right"></span></a>

                    <div class="rating-box">
                        <div style="width: 60%" class="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="73px" height="12px" viewBox="0 0 73 12" enable-background="new 0 0 73 12" xml:space="preserve">
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5"></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 "></polygon>
					</svg>
                        </div>
                    </div>
                    <button class="btn btn-info btn-lg">Buy Now</button>
                </div>
            </div>
            <!-- .pricing -->
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="pricing pricing-success">
                <div class="title"><a href="#">Third Package</a></div>
                <div class="price-box">
                    <div class="icon icon-60 pull-right border circle">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div class="starting">Starting at</div>
                    <div class="price">$399<span>/month</span></div>
                </div>
                <ul class="options">
                    <li class="active"><span><i class="fa fa-check"></i></span>Responsive Design</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Color Customization</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>HTML5 &amp; CSS3</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Styled elements</li>
                    <li><span><i class="fa fa-check"></i></span>Easy Setup</li>
                </ul>
                <div class="bottom-box">
                    <a href="#" class="more">Read more <span class="fa fa-angle-right"></span></a>

                    <div class="rating-box">
                        <div style="width: 80%" class="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="73px" height="12px" viewBox="0 0 73 12" enable-background="new 0 0 73 12" xml:space="preserve">
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5"></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 "></polygon>
					</svg>
                        </div>
                    </div>
                    <button class="btn btn-success btn-lg">Buy Now</button>
                </div>
            </div>
            <!-- .pricing -->
        </div>

        <div class="col-sm-6 col-md-4 col-md-offset-4 col-lg-3 col-lg-offset-0">
            <div class="pricing pricing-error">
                <div class="title"><a href="#">Fourth Package</a></div>
                <div class="price-box">
                    <div class="icon icon-60 pull-right border circle">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="starting">Starting at</div>
                    <div class="price">$499<span>/month</span></div>
                </div>
                <ul class="options">
                    <li class="active"><span><i class="fa fa-check"></i></span>Responsive Design</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Color Customization</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>HTML5 &amp; CSS3</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Styled elements</li>
                    <li class="active"><span><i class="fa fa-check"></i></span>Easy Setup</li>
                </ul>
                <div class="bottom-box">
                    <a href="#" class="more">Read more <span class="fa fa-angle-right"></span></a>

                    <div class="rating-box">
                        <div style="width: 100%" class="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="73px" height="12px" viewBox="0 0 73 12" enable-background="new 0 0 73 12" xml:space="preserve">
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5"></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 "></polygon>
					  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e" points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 "></polygon>
					</svg>
                        </div>
                    </div>
                    <button class="btn btn-danger btn-lg">Buy Now</button>
                </div>
            </div>
            <!-- .pricing -->
        </div>
    </div>
    <!-- .pricings -->
</div>
</div>

<div class="full-width-box bottom-padding" id="tem">
    <div class="fwb-bg background-green"></div>

    <div class="container">
        <div class="title-box text-center title-white">
            <h1 class="title">他们说</h1>
        </div>
        <div>
        <blockquote>
          <p>人类基因组序列是全人类的共同财富，应该用来为全人类造福。</p>
          <footer>习近平</footer>
        </blockquote>
        <blockquote>
          <p>未来十二年，生物芯片技术将为每个人的疾病预防指点迷津。</p>
          <footer>奥巴马</footer>
        </blockquote>
        <blockquote>
          <p>基因技术的发展，不仅为相关医学研究打下了坚实的基础，而且促进了医学模式的改变，为解决长期困扰人类的很多重大疾病，如癌症、糖尿病、神经和精神疾病等的早期诊断、早期治疗开辟了新途径。
             十三亿人口的健康不能光靠看病吃药解决，加强预防和保护环境是根本，基因检测是预防疾病的重要手段。</p>
          <footer>卫生部部长 陈竺</footer>
        </blockquote>
        </div>
    </div>
</div>

<!-- .full-width-box -->

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