<?php get_header(); ?>
<main  id="top" name="top">
<!-- section hero -->
<section class="hero">
    <div class="hero_wrapper">
        <div class="hero_wrapper-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_blessed-cols-nega.svg" alt="BLESSED conditioning gym" />
        </div>
        <h1 class="hero_wrapper-catch">
            <img src="<?php echo get_template_directory_uri(); ?>/img/figure_hero.svg" alt="トレーニング×コンディショニング＝トータルボディメンテナンス">
        </h1>
        <dl class="hero_wrapper-lead">
            <dt>コンディショニングジムとは？</dt>
            <dd>
                確実な成果はご自身の身体を知ること。<br />コンディショニングを整えながら<br />効率的にトレーニングすることで<br />理想の身体の実現をサポートします
            </dd>
        </dl>
    </div>
    <!-- 自動スライドショー -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-01.png" alt=""></div>
            <div class="swiper-slide"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-02.png" alt=""></div>
            <div class="swiper-slide"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-03.png" alt=""></div>
            <div class="swiper-slide"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-04.png" alt=""></div>
            <div class="swiper-slide"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-06.png" alt=""></div>
        </div>
    </div>
</section>
<!-- Carousel -->
  <!-- <div class="area js-area">
    <div class="wrap js-wrap">
      <div class="item item04 js-item"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-01.png" alt=""></div>
      <div class="item item05 js-item"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-02.png" alt=""></div>
      <div class="item item05 js-item"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-03.png" alt=""></div>
      <div class="item item05 js-item"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-04.png" alt=""></div>
      <div class="item item05 js-item"><img class="slide-img" src="<?php echo get_template_directory_uri(); ?>/img/carousel_item-05.png" alt=""></div>
    </div>
  </div> -->

<!-- お知らせ -->
<section class="information" id="information" name="information">
    <span class="section_heading-label">
        Information
    </span>
    <div class="information_wrapper">
        <ul class="information_itemlist popup">
            <?php
                $args = array(
                'post_type' => 'information',
                'posts_per_page' => '3',
                'orderby'  => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                );
            ?>
            <?php $my_query = new WP_Query($args); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li class="information_itemlist-item">
                        <!-- 記事へのリンク -->
                        <a href="<?php the_permalink(); ?>" class="">
                            <!-- アイキャッチ -->
                            <div class="tmb">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'sample-img', 'alt' => the_title_attribute('echo=0'))); ?>
                            </div>
                            <!-- 投稿日 -->
                            <p class="date">
                                <time datetime="<?php the_time('Y.m.d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                            </p>
                            <p class="title">
                                <?php echo wp_trim_words(get_the_title(), 16, '…'); ?>
                            </p>
                            <p class="body">
                                <?php echo wp_trim_words(get_the_content(), 24, '…'); ?>
                            </p>
                        </a>
                    </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</section>
<!-- greeting -->
<section class="greeting">
    <span class="section_heading-label">greeting</span>
    <div class="greeting_wrapper">
        <div class="greeting_body">
            <h2 class="greeting_body-catch popup">希望の成果、理想の身体を手に入れるために何が必要でしょうか？</h2>
            <ul class="greeting_body-lead-baloon">
                <li class="popup">続けるためのガマン強さ！</li>
                <li class="popup">経済力</li>
                <li class="popup">トレーニングをこなせる運動能力・体力！</li>
            </ul>
            <p class="greeting_body-lead-answer popup">
                どれもあるにこしたことはありませんが😅<br />ただ、我慢しながら、お財布を気にしながら、自分の運動センスを疑いながら、そんなトレーニングよりも！
            </p>
            <h3 class="greeting_body-lead-summary popup">
                身体の変化を理解しながら、<wbr>小さな成果を積み重ねていく！<wbr>そんなトレーニングに<wbr>取り組んでみませんか？
            </h3>
        </div>
    </div>
</section>
<!-- concept -->
<section class="concept">
    <span class="section_heading-label">concept</span>
    <div class="concept_wrapper">
        <h2 class="concept_body-catch">合理的なトレーニングプランにより<wbr>確実な成果を実感できます！</h2>
        <ul class="concept_body-lead">
            <li class="popup">国家資格保有者による<br />課題の発見・解決策の提示</li>
            <li class="popup">経験豊富なトレーナーによる<wbr>合理的なトレーニング</li>
        </ul>
        <div class="concept_body-summary">
            <p class="popup">
                理想の身体を実現するためには、<wbr>より深く身体のことを知る必要があります。
                身体の専門家がお身体の課題を見つけ、<wbr>必要な箇所にしっかり効かせていく<wbr>トレーニングプランをご提供します！
            </p>
            <h3 class="popup">
                トレーニングで変化した身体の感覚、<wbr>得た知識や生活習慣など、<wbr>一時的な成果で終わらせず、<wbr>一生の財産を手に入れましょう！
            </h3>
        </div>
    </div>
</section>
<!-- campaign -->
<!-- <?php include('component_campaign.php'); ?> -->
<!-- 料金 -->
<section class="price" id="price">
    <span class="section_heading-label">price</span>
    <div class="price_wrapper">
        <h2 class="price_body-catch slice-heading popup">成果を得るには継続が不可欠！<wbr>続けやすい月額でのご入会が<wbr>おすすめです</h2>
        <div class="price_list">
            <!-- 月額会員 -->
            <div class="price_list-item subscription">
                <h3 class="item-title-rect">一般月額会員</h3>
                <div class="item-initial popup">
                    <dl class="item-initial-list">
                        <dt class="item-initial-list-title">体験料金・入会金</dt>
                        <div class="item-initial-list-item">
                            <dt>初回体験</dt>
                            <dd>¥5,500</dd>
                        </div>
                        <div class="item-initial-list-item">
                            <dt>初回体験（紹介）</dt>
                            <dd>¥5,000</dd>
                        </div>
                        <div class="item-initial-list-item">
                            <dt>入会金／登録料</dt>
                            <dd>¥22,000</dd>
                        </div>
                    </dl>
                    <div class="item-initial-campaign">
                        <h2>サイトオープンキャンペーン</h2>
                        <h3>体験当日にご入会いただくと</h3>
                        <div class="price_list-initial-item">
                            <dl>
                                <dt>入会金／登録料 ¥22,000</dt>
                                <div>
                                    <dd class="campaign-price discount">50% OFF</dd>
                                    <!-- <dd>
                                        <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                                    </dd> -->
                                    <dd class="campaign-price large"><span>¥</span>11,000</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="item-block-list">
                    <div class="item-block popup">
                        <div class="item-block-after">
                            <span class="item-block-after-times">月２回コース</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>13,200</span>
                        </div>
                        <div class="item_content-minit">¥6,600／１session（60分）</div>
                    </div>
                    <div class="item-block popup">
                        <div class="item-block-after">
                            <span class="item-block-after-times">月４回コース</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>22,000</span>
                        </div>
                        <div class="item_content-minit">¥5,500／１session（60分）</div>
                    </div>
                    <div class="item-block popup">
                        <div class="item-block-after">
                            <span class="item-block-after-times">月８回コース</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>33,000</span>
                        </div>
                        <div class="item_content-minit">¥4,125／１session（60分）</div>
                    </div>
                    <div class="item-block popup">
                        <div class="item-block-after popup">
                            <span class="item-block-after-times">通い放題コース</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>55,000</span>
                        </div>
                        <div class="item_content-minit">¥2,750／１session（60分）※月20回利用</div>
                    </div>
                </div>
            </div>
            <!-- 回数券コース -->
            <div class="price_list-item long">
                <h3 class="item-title-rect">回数券コース</h3>
                <div class="item-initial popup">
                    <dl class="item-initial-list">
                        <dt class="item-initial-list-title">体験料金・入会金</dt>
                        <div class="item-initial-list-item">
                            <dt>初回体験</dt>
                            <dd>¥5,500</dd>
                        </div>
                        <div class="item-initial-list-item">
                            <dt>初回体験（紹介）</dt>
                            <dd>¥5,000</dd>
                        </div>
                        <div class="item-initial-list-item">
                            <dt>入会金／登録料</dt>
                            <dd>¥22,000</dd>
                        </div>
                    </dl>
                    <div class="item-initial-campaign">
                        <h2>サイトオープンキャンペーン</h2>
                        <h3>体験当日にご入会いただくと</h3>
                        <div class="price_list-initial-item">
                            <dl>
                                <dt>初回体験 ¥5,500・初回体験（紹介）¥5,000</dt>
                                <div>
                                    <dd class="campaign-price discount">Free!</dd>
                                    <!-- <dd>
                                        <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                                    </dd> -->
                                    <dd class="campaign-price large"><span>¥</span>0</dd>
                                </div>
                                <dt>入会金／登録料 ¥22,000</dt>
                                <div>
                                    <dd class="campaign-price discount">Free!</dd>
                                    <!-- <dd>
                                        <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                                    </dd> -->
                                    <dd class="campaign-price large"><span>¥</span>0</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="item-block-list">
                    <div class="item-block popup">
                        <div class="item-block-after">
                            <span class="item-block-after-times">４回コース</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>32,000</span>
                        </div>
                        <div class="item_content-minit">¥8,000／１session（60分）</div>
                    </div>
                    <div class="item-block popup">
                        <div class="item-block-after">
                            <span class="item-block-after-times">８回コース</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>61,600</span>
                        </div>
                        <div class="item_content-minit">¥7,700／１session（60分）</div>
                    </div>
                    <div class="item-block popup">
                        <div class="item-block-after popup">
                            <span class="item-block-after-times">１２回コース</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>89,760</span>
                        </div>
                        <div class="item_content-minit">¥7,480／１session（60分）</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="price_list price_list-athlete">
            <!-- アスリートコース -->
            <div class="price_list-item long">
                <h3 class="item-title-rect">アスリートコース（通常価格）</h3>
                <div class="item-initial popup">
                    <dl class="item-initial-list">
                        <dt class="item-initial-list-title">体験料金・入会金</dt>
                        <div class="item-initial-list-item">
                            <dt>初回体験</dt>
                            <dd>¥5,500</dd>
                        </div>
                        <div class="item-initial-list-item">
                            <dt>初回体験（紹介）</dt>
                            <dd>¥5,000</dd>
                        </div>
                    </dl>
                </div>
                <div class="item-block-list popup">
                    <div class="item-block">
                        <div class="item-block-after popup">
                            <span class="item-block-after-times">1 Session（60分）</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>8,800</span>
                        </div>
                    </div>
                </div>
                <h3 class="item-title-rect">アスリートコース（会員価格）</h3>
                <div class="item-initial popup">
                    <dl class="item-initial-list">
                        <dt class="item-initial-list-title">体験料金・入会金</dt>
                        <div class="item-initial-list-item">
                            <dt>入会金／登録料</dt>
                            <dd>¥11,000</dd>
                        </div>
                        <dd class="item-initial-list-notice">※１年ごとの更新時に必要となります</dd>
                    </dl>
                </div>
                <div class="item-block-list popup">
                    <div class="item-block">
                        <div class="item-block-after popup">
                            <span class="item-block-after-times">1 Session（60分）</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>6,600</span>
                        </div>
                    </div>
                    <div class="item-block">
                        <div class="item-block-after popup">
                            <span class="item-block-after-times">回数券（月２）</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item-block-after-price"><span>¥</span>12,100</span>
                        </div>
                    </div>
                </div>
                <dl class="item_feature popup">
                    <dt class="item_feature-title">会員特典</dt>
                    <dd class="item_feature-list">
                        <ul>
                            <li>
                                <span class="material-symbols-outlined">check</span><span class="text">通常価格の25%OFF</span>
                            </li>
                            <li>
                                <span class="material-symbols-outlined">check</span><span class="text">ウェイトトレーニング＋動作改善対応</span>
                            </li>
                            <li>
                                <span class="material-symbols-outlined">check</span><span class="text">コンディショニング＋ボディケア対応</span>
                            </li>
                            <li>
                                <span class="material-symbols-outlined">check</span><span class="text">動画によるオンライン指導対応</span>
                            </li>
                            <li>
                                <span class="material-symbols-outlined">check</span><span class="text">ラプソードを用いたピッチングデザイン</span>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</section>
<!-- その他 -->
<section class="option">
    <span class="section_heading-label">Other Session</span>
    <div class="option_wrapper popup">
        <h2 class="option_body-catch">BLESSEDは<wbr>未来のアスリートを応援します</h2>
        <dl class="option_list">
            <dt class="option_list-title">
                BLESSEDでは、こんなご相談にもお応えしています。<wbr>お気軽にお問い合わせください！
            </dt>
            <dd class="option_list-contents">
                <ul>
                    <li>
                        <span class="material-symbols-outlined">handshake</span>
                        <span>競技で疲労した身体を<wbr>定期的にメンテナンスしていきたい！</span>
                    </li>
                    <li>
                        <span class="material-symbols-outlined">handshake</span>
                        <span>競技パフォーマンスをあげたい！</span>
                    </li>
                    <li>
                        <span class="material-symbols-outlined">handshake</span>
                        <span>仲間と一緒に楽しくトレーニングしたい！</span>
                    </li>
                    <li>
                        <span class="material-symbols-outlined">handshake</span>
                        <span>チームでトレーニングに取り組みたい！</span>
                    </li>
                </ul>
            </dd>
        </dl>
    </div>
</section>
<!-- gyminfo -->
<section class="gyminfo" id="gyminfo">
    <div class="gyminfo_wrapper">
        <div class="gyminfo_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_cols-posi.svg" alt="BLESSED conditioning gym">
        </div>
        <dl class="gyminfo_location">
            <div class="gyminfo_location-item">
                <dt class="kana">ブレスドジム</dt>
            </div>
            <div class="gyminfo_location-item">
                <dt>zip :</dt><dd>〒241-0825</dd>
            </div>
            <div class="gyminfo_location-item">
                <dt>address :</dt><dd>神奈川県横浜市旭区中希望ヶ丘102-19<wbr>PMZ希望ヶ丘204</dd>
            </div>
            <div class="gyminfo_location-item">
                <dt>tel :</dt><dd>080-4684-1809</dd>
            </div>
        </dl>
        <div class="gyminfo_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.8305350288006!2d139.51219367593043!3d35.45898964215023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601857e6bbbdc01b%3A0xabe0ba49ac26024f!2zQkxFU1NFRCBjb25kaXRpb25pbmcgZ3ltIC3jg5bjg6zjgrnjg4njgrjjg6At!5e0!3m2!1sja!2sjp!4v1702388072074!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- staff -->
<section class="staff" id="staff" name="name">
    <span class="section_heading-label">staff</span>
    <div class="staff_wrapper">
        <ul class="staff_itemlist">
            <?php
                $args = array(
                'post_type' => 'staff',
                'posts_per_page' => '3',
                'orderby'  => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                );
                // クエリに合致した投稿を絞り込み
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post );
                $staffList = SCF::get('staff_list');
                    foreach ($staffList as $staff) {
                        $thumbnail = wp_get_attachment_image_src($staff['staff_image'], 'full');
                    ?>
                    <li class="staff_itemlist-item">
                        <div class="wrapper">
                            <div class="thumbnail popup">
                                <img src="<?php echo  $thumbnail[0]; ?>" />
                            </div>
                            <div class="profile">
                                <div class="profile_block popup">
                                    <p class="subtitle"><?php echo $staff['staff_subtitle']; ?></p>
                                    <p class="name-ja"><?php echo $staff['staff_name-ja']; ?></p>
                                    <p class="name-en"><?php echo $staff['staff_name-en']; ?></p>
                                </div>
                                <div class="profile_block popup">
                                    <p class="memo"><?php echo $staff['staff_memo']; ?></p>
                                </div>
                            </div>
                            <p class="comment popup"><?php echo $staff['staff_comment']; ?></p>
                        </div>
                    </li>
                <?php } ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</section>
<!-- topics -->
<section class="blog" id="topics" name="topics">
    <div class="section_heading-label">Topics</div>
    <div class="blog_wrapper">
        <ul class="blog_list">
            <!-- BLOGのループ処理開始 -->
            <?php
                if( wp_is_mobile() ) {{
                    $num = 3;
                }} else {
                    $num = 4;
                }
                $args = [
                    'post_type' => 'topics', // 投稿タイプのスラッグを指定（通常の投稿は'post'）
                    'posts_per_page' => $num,
                ];
                $the_query = new WP_Query( $args );
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <li class="">
                <!-- 記事へのリンク -->
                <a href="<?php the_permalink(); ?>" class="">
                    <div class="item-header">
                        <!-- NEW -->
                        <?php
                            $days = 5;
                            $today = date_i18n('U');
                            $entry_day = get_the_time('U');
                            $keika = date('U',($today - $entry_day)) / 86400;
                            if ( $days > $keika ):?>
                                <p class="blog_new blinking">NEW</p>
                        <?php endif; ?>
                        <!-- 投稿日 -->
                        <p class="blog_date popup">
                            <time datetime="<?php the_time('Y.m.d'); ?>">
                                <?php the_time('Y.m.d'); ?>
                            </time>
                        </p>
                    </div>
                    <!-- アイキャッチ -->
                    <div class="blog_tmb popup">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'sample-img', 'alt' => the_title_attribute('echo=0'))); ?>
                    </div>
                    <!-- タイトル -->
                    <h2 class="blog_title popup">
                        <?php echo wp_trim_words(get_the_title(), 32, '…'); ?>
                    </h2>
                    <!-- 本文の抜粋 -->
                    <div class="blog_body popup">
                        <?php echo wp_trim_words(get_the_content(), 64, '…'); ?>
                    </div>
                    <!-- カテゴリー名 -->
                    <ul class="blog_category popup">
                        <?php
                            $post_id = get_the_ID();
                            $terms = get_the_terms($post_id, 'category_topics');
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<li>' . $term->name . '</li>';
                                }
                            } else {
                                echo '<li>Uncategorized</li>';
                            }
                        ?>
                    </ul>
                </a>
            </li>
            <?php endwhile; else: ?> <!-- while終了 & falseの場合は以下に続く -->
                <p>記事がありません</p>
            <?php endif ?> <!-- BLOGのループ処理終了 -->
            <?php wp_reset_postdata(); ?>
        </ul>
        <!-- <div class="btn_pagelink popup">
            <a href="<?php echo home_url(); ?>/blog-list">トピックス一覧
                <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
            </a>
        </div> -->
    </div>
</section>
<!-- strengths -->
<section class="strengths" id="strengths" name="strengths">
    <span class="section_heading-label">Strengths</span>
    <div class="strengths_wrapper">
        <h2 class="strengths_body-catch popup">多角的な視点から確実に動ける身体を</h2>
        <div class="strengths_body-contents">
            <div class="strengths_body-contents-item">
                <p class="strengths_body-lead popup">
                    トレーニングとメンテナンスを<wbr>継続的に繰り返すことで、<wbr>正しいトレーニング＝正しい生活習慣を<wbr>身につけていきます
                </p>
                <figure class="strengths_figure popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/figure_triangle.svg" alt="健康で動ける身体に">
                </figure>
            </div>
            <div class="strengths_body-contents-item">
                <p class="strengths_body-lead popup">
                    健康な身体も競技パフォーマンスアップも<br />基礎（Foundation）の上になりたちます
                </p>
                <figure class="strengths_figure popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/figure_pyramid.svg" alt="健康で動ける身体に">
                </figure>
            </div>
        </div>
        <ul class="strengths_bnrlist">
            <li class="strengths_bnrlist-item popup">
                <a>
                    <h4>BLESSEDの強み【その１】</h4>
                    <dl>
                        <dt>正しく動ける強い身体に</dt>
                        <dd>トレーニング×コンディショニング</dd>
                    </dl>
                </a>
            </li>
            <li class="strengths_bnrlist-item popup">
                <a>
                    <h4>BLESSEDの強み【その２】</h4>
                    <dl>
                        <dt>しくみを理解して健康的で<br />太らない身体に</dt>
                        <dd>ダイエット</dd>
                    </dl>
                </a>
            </li>
            <li class="strengths_bnrlist-item popup">
                <a>
                    <h4>BLESSEDの強み【その３】</h4>
                    <dl>
                        <dt>様々な技術を乗せられる<br />土台となる身体に</dt>
                        <dd>パフォーマンスアップ</dd>
                    </dl>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- よくある質問 -->
<section class="inquiry" id="inquiry" name="inquiry">
    <span class="section_heading-label">よくあるご質問</span>
    <div class="inquiry_wrapper">
        <div class="faqAccordion">
            <div class="faqAccordion_item popup">
                <div class="faqAccordion_header">運動初心者で、ついていけるか<br />不安なのですが通えますか？</div>
                <div class="faqAccordion_content">
                    <div class="faqAccordion_content-inner">当ジムに入会される方の9割が初心者スタートです。性別年齢問わず多くの方にご利用頂いております。トレーナーが個々のレベルに合わせてメニューを組んでいくのでご安心ください！</div>
                </div>
            </div>
            <div class="faqAccordion_item popup">
                <div class="faqAccordion_header">昔みたいに身体が動かない…</div>
                <div class="faqAccordion_content">
                    <div class="faqAccordion_content-inner">当ジムでは身体のメンテナンスも得意としています。状態をしっかりチェックして、ストレッチやトレーニングで動ける身体づくりをサポートします！</div>
                </div>
            </div>
            <div class="faqAccordion_item popup">
                <div class="faqAccordion_header">本当に定額で通い放題？</div>
                <div class="faqAccordion_content">
                    <div class="faqAccordion_content-inner">毎月定額の会費のみで追加料金は一切かかりません。長く続けられるパーソナルジムを目指しております！</div>
                </div>
            </div>
            <div class="faqAccordion_item popup">
                <div class="faqAccordion_header">予約の方法は？</div>
                <div class="faqAccordion_content">
                    <div class="faqAccordion_content-inner">問い合わせフォーム、公式LINE、InstagramのDMでもご予約頂けます。</div>
                </div>
            </div>
            <div class="faqAccordion_item popup">
                <div class="faqAccordion_header">予約は取りやすいですか？</div>
                <div class="faqAccordion_content">
                    <div class="faqAccordion_content-inner">人数制限を設けていますので、会員の皆様が平等にご予約をお取りいただけます。ストレスなく通っていただけますのでご安心ください。</div>
                </div>
            </div>
            <div class="faqAccordion_item popup">
                <div class="faqAccordion_header">初回体験時の持ち物は？</div>
                <div class="faqAccordion_content">
                    <div class="faqAccordion_content-inner">
                        <ul>
                            <li>動きやすいウエア</li>
                            <li>室内シューズ</li>
                            <li>タオル</li>
                            <li>飲み物</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- お問い合わせ -->
<section class="form" id="form" name="form">
    <span class="section_heading-label">体験申し込みフォーム</span>
    <div class="form_wrapper">
        <?php echo do_shortcode('[contact-form-7 id="b8b731d" title="blessed_contactForm"]'); ?>
    </div>
</section>
<!-- CTA -->
<!-- <section class="bottom-cta">
        <div class="cta_wrapper">
            <h3 class="cta_title">体験当日入会で</h3>
            <div class="cta_contents">
                <div class="bold contents-01"><span>体験</span>&<span>入会金</span></div>
                <span class="material-symbols-outlined">arrow_forward</span>
                <div class="extra-bold contents-02">無料</div>
            </div>
            <div class="cta_induction"><a href="">体験申し込みはこちらから</a></div>
        </div>
    </section> -->
</main>
<!-- float banner -->
<div class="float_banner" id="float_banner">
    <a href="#form">
        <h3 class="float_banner_title">
            <span class="top">体験お申し込みはこちら</span>
            <span class="bottom">
                <span class="material-symbols-outlined">
                    arrow_right_alt
                </span>
                <span>無料！</span>
            </span>
        </h3>
        <div class="float_banner_split">
            <span class="material-symbols-outlined">
                pan_tool_alt
            </span>
            <span class="text">
                Click!
            </span>
        </div>
    </a>
</div>
<!-- top btn -->
<div class="btn_pagetop">
    <a href="#wrap">
        <span></span>
        <span></span>
    </a>
</div>
<!-- footer sticky -->
<?php
    include('footbnr.php');
?>
<?php get_footer(); ?>