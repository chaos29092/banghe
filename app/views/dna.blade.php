@extends('master')

@section('title')
    <title>邦禾 - DNA百科</title>
    <meta name="keywords" content="邦禾 - DNA百科">
    <meta name="description" content="邦禾 - DNA百科">
@stop

@section('content')
<section id="main">
    <header class="page-header">
        <div class="container">
            <h1 class="title">DNA百科</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="content blog col-sm-9 col-md-9">

                <article class="post">
                    <h2 class="entry-title"><a href="{{url('dna/dna_1')}}">基因检测与重大疾病预防</a></h2>
                    <div class="entry-content">
                        在美国、欧洲等科技发达的国家，人们已经普遍应用一种新的方法来指导健康，对疾病采取更有针对性的防御。
                        据报道，在美国，乳腺癌、肠癌等严重影响人类健康的恶性疾病的发病率已经降低了50%以上。这种新方法就是：基因检测。那么，什么是基因检测呢？基因检测又是如何指导保健和预防疾病的呢？
                    </div>
                    <footer class="entry-meta">
                        <span class="autor-name">邦禾生物</span>,
                        <span class="time">13.01.2015</span>
                        <span class="separator">|</span>
                        <span class="meta">发布于 <a href="#">dna</a></span>
                    </footer>
                </article><!-- .post -->

                <article class="post">
                    <h2 class="entry-title"><a href="{{url('dna/dna_2')}}">基因检测与个性化用药</a></h2>
                    <div class="entry-content">
                        个性化用药基因检测项目包括：肿瘤个性化用药基因检测和心脑血管类用药基因检测。
                        用药安全已成为医学界的热点问题。由于药物的不良反应，对患者的治疗带来巨大的隐患。联合国世界卫生组织统计：全球死亡患者中，1/3是死于不合理用药，而非死于自然疾病本身。

                    </div>
                    <footer class="entry-meta">
                        <span class="autor-name">邦禾生物</span>,
                        <span class="time">05.01.2015</span>
                        <span class="separator">|</span>
                        <span class="meta">发布于 <a href="#">dna</a></span>
                    </footer>
                </article><!-- .post -->

                <article class="post">
                    <h2 class="entry-title"><a href="{{url('dna/dna_3')}}">基因检测与生活方式</a></h2>
                    <div class="entry-content">
                        人的生活方式是根据每个人的生活习惯在长时间中形成的,但真正明确自己的生活方式是否正确合理,最有效,谁也不能百分百的评价自己,因为在生活中所遇到的因素,实在太多太复杂了,实际上从最简单的道理来讲,我们都是熟知的,例如:不吸烟,不酗酒,心里平衡,午睡,不熬夜,多吃蔬菜水果,适当参加运动,..等,其中最难做到的,就是"心理平衡"这一条做不到,其它几条都做到也没有用。
                    </div>
                    <footer class="entry-meta">
                        <span class="autor-name">邦禾生物</span>,
                        <span class="time">02.01.2015</span>
                        <span class="separator">|</span>
                        <span class="meta">发布于 <a href="#">dna</a></span>
                    </footer>
                </article><!-- .post -->

                <div class="pagination-box">
                    <ul class="pagination">
                        <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <i class="pagination-text">Displaying 1 to 10 (of 100 posts)</i>
                </div><!-- .pagination-box -->
            </div><!-- .content -->

            <div id="sidebar" class="sidebar col-sm-3 col-md-3">
                <aside class="widget list">
                    <header>
                        <h3 class="title">最新文章</h3>
                    </header>
                    <ul>
                        <li><a href="{{url('dna/dna_1')}}">基因检测与重大疾病预防</a></li>
                        <li><a href="{{url('dna/dna_2')}}">基因检测与个性化用药</a></li>
                        <li><a href="{{url('dna/dna_3')}}">基因检测与生活方式</a></li>
                    </ul>
                </aside><!-- .list -->

                <aside class="widget list">
                    <header>
                        <h3 class="title">历史</h3>
                    </header>
                    <ul>
                        <li><a href="{{url('dna')}}">2015年1月</a></li>
                    </ul>
                </aside><!-- .list -->

                <aside class="widget tags">
                    <header>
                        <h3 class="title">标签</h3>
                    </header>
                    <ul class="clearfix">
                        <li><a href="{{url('dna')}}">dna</a></li>
                    </ul>
                </aside><!-- .tags -->
            </div><!-- .sidebar -->
        </div>
    </div><!-- .container -->





</section>

@stop