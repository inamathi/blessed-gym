<?php
    /*
    Template Name: template_strengths-performance
    */
?>
<?php include("header-page.php"); ?>
<main class="page-strengths">
    <div class="page-strengths_top">
        <div class="top-item">
            <h3>BLESSEDの強み【その３】</h3>
            <h1>様々な技術を乗せられる<br />土台となる身体に</h1>
            <h2>パフォーマンスアップ</h2>
            <figure class="top-item-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_cols-posi.svg" alt="BLESSED | conditioning gym" class="footer_mobile_top_logo" />
            </figure>
        </div>
    </div>
    <div class="page_wrapper">
        <section class="page_intro">
            <h2 class="page-heading-02">
                基礎をしっかり築き<br />確実なパフォーマンスアップ
            </h2>
            <figure class="strengths_graph">
                <img src="<?php echo get_template_directory_uri(); ?>/img/figure_pyramid.svg" alt="">
            </figure>
            <h3 class="page-heading-03">
                トレーニングとメンテナンスを<wbr>継続的に繰り返すことで<wbr>運動を習慣化
            </h3>
            <h4 class="page-heading-04">
                競技パフォーマンスアップは<wbr>基礎（Foundation）の上に<wbr>成り立ちます
            </h4>
            <h4 class="page-heading-04">
                身体の状態に合わせた効果的な<wbr>トレーニングで、土台を確実に<wbr>大きくしていきます
            </h4>
        </section>
        <section class="page_flow">
            <ul class="page_flowlist">
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy11.png" alt="">
                    </figure>
                    <p>
                        身体の可動域や動作のチェックを行います。身体の癖や怪我につながる問題などをチェックし、ストレッチなどでコンディショニングを整えていきます。
                    </p>
                </li>
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy12.png" alt="">
                    </figure>
                    <p>
                        身体の状態に適切な負荷のトレーニングを開始していきます。競技特性によって必要な部位などを考慮しながら、負荷をかけていきます。
                    </p>
                </li>
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy13.png" alt="">
                    </figure>
                    <p>
                        繰り返し身体の状態をチェックしていきます。狙った効果が得られているかどうか、身体をメンテナンスしながら、次のメニューを考えていきます。BLESSEDでは状態チェックに止まらず、国家資格保有者によるマッサージなどで、必要な部位に直接背術施術をすることができます。
                    </p>
                </li>
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy14.png" alt="">
                    </figure>
                    <p>
                        身体の状態をキープするために必要なことを指導していきます。日常でのトレーニング、チェックポイント、食事や睡眠に対しての考え方、身体に関すること全般、丁寧に説明していきます。
                    </p>
                </li>
            </ul>
        </section>
    </div>
    <!-- strengths 共通部分 -->
    <?php include('component_strengths.php'); ?>
    <!-- お問い合わせ -->
    <section class="form" id="form" name="form">
        <span class="section_heading-label">体験申し込みフォーム</span>
        <div class="form_wrapper">
            <?php echo do_shortcode('[contact-form-7 id="b8b731d" title="blessed_contactForm"]'); ?>
        </div>
    </section>
    <!-- top btn -->
    <div class="btn_pagetop">
        <a href="#wrap">
            <span></span>
            <span></span>
        </a>
    </div>
</main>
<?php
    include('footer.php');
?>