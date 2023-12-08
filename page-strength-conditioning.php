<?php
    /*
    Template Name: template_strengths-conditioning
    */
?>
<?php
    include('header-page.php');
?>
<main class="page-strengths">
    <div class="page-strengths_top">
        <div class="top-item">
            <h3>BLESSEDの強み【その１】</h3>
            <h1>正しく動ける強い身体に</h1>
            <h2>トレーニング × コンディショニング</h2>
            <figure class="top-item-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_cols-posi.svg" alt="BLESSED | conditioning gym" class="footer_mobile_top_logo" />
            </figure>
        </div>
    </div>
    <div class="page_wrapper">
        <!-- intro -->
        <section class="page_intro">
            <h2 class="page-heading-02">
                健康な身体の基礎は<wbr>ご自身の身体を知ることから
            </h2>
            <figure class="strengths_graph">
                <img src="<?php echo get_template_directory_uri(); ?>/img/figure_dummy-cycle.png" alt="">
            </figure>
            <h3 class="page-heading-03">
                トレーニングとメンテナンスを<wbr>継続的に繰り返すことで<wbr>運動を習慣化
            </h3>
            <h4 class="page-heading-04">
                日常生活の中での動きから改善、<wbr>健康的で動ける身体を実現します
            </h4>
        </section>
        <!-- セッションの流れ -->
        <section class="page_flow">
            <ul class="page_flowlist">
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy01.png" alt="">
                    </figure>
                    <p>
                        お客様の身体の状態をチェックし、把握していきます。痛みのある場合は日常での身体の動かし方からチェックし、原因を探していきます。
                    </p>
                </li>
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy02.png" alt="">
                    </figure>
                    <p>
                        お客様の身体の状態をチェックし、把握していきます。痛みのある場合は日常での身体の動かし方からチェックし、原因を探していきます。
                    </p>
                </li>
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy03.png" alt="">
                    </figure>
                    <p>
                        お客様の身体の状態をチェックし、把握していきます。痛みのある場合は日常での身体の動かし方からチェックし、原因を探していきます。
                    </p>
                </li>
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy04.png" alt="">
                    </figure>
                    <p>
                        お客様の身体の状態をチェックし、把握していきます。痛みのある場合は日常での身体の動かし方からチェックし、原因を探していきます。
                    </p>
                </li>
                <li class="page_flowlist-item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_page-dummy05.png" alt="">
                    </figure>
                    <p>
                        お客様の身体の状態をチェックし、把握していきます。痛みのある場合は日常での身体の動かし方からチェックし、原因を探していきます。
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