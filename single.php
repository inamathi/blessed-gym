<?php
    include('header-page.php');
?>
<!-- <?php // 現在使用しているテンプレートファイルを表示
  if (is_user_logged_in()){ // ログイン中なら以下を表示
    global $template; // テンプレートファイルのパスを取得
    $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
    echo '現在使用しているテンプレートファイル：'.$temp_name; // ファイル名の表示
  }
?> -->
<main>
    <div class="single_wrapper">
        <div class="single_wrapper-left">
            <?php
                $args = array(
                    'post_type' => 'topics',
                    'posts_per_page' => 1,
                    'order' => 'DESC',
                    'tax_query' =>
                    array(
                        'taxonomy' => 'category_topics',
                        'terms' => array('category_topics'),
                        'field' => 'slug'
                    ),
                );
                $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>
            <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?> -->
            <div class="blog_eyecatch">
                <?php if(has_post_thumbnail()): ?>
                    <div class="blog_eyecatch-tmb">
                        <img src="<?php the_post_thumbnail_url('large'); ?>">
                    </div>
                <?php endif; ?>
                <!-- 投稿日 -->
                <p class="blog_eyecatch-date">
                    <time datetime="<?php the_time('Y.m.d'); ?>">
                        <?php the_time('Y.m.d'); ?>
                    </time>
                </p>
                <!-- タイトル -->
                <h1 class="blog_eyecatch-title">
                    <?php the_title(); ?>
                </h1>
                <!-- カテゴリー -->
                <!-- <ul class="blog_eyecatch-category">
                        <?php
                            $post_id = get_the_ID();
                            $terms = get_the_terms($post_id, 'category_topics');
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                                }
                            } else {
                                echo '<li>カテゴリ分類なし</li>';
                            }
                        ?>
                </ul> -->
                <!-- タグ -->
                <div class="blog_eyecatch-tags">
                    <?php the_tags('#', ''); ?>
                </div>
            </div>
            <div class="blog_body">
                <?php echo the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            <!-- postback -->
            <div class="btn-controll">
                <?php
                    $h = $_SERVER['HTTP_HOST'];
                    if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'],$h) !== false)) {
                        echo '<a class="btn_postback" href="' . $_SERVER['HTTP_REFERER'] . '"><span class="material-symbols-outlined">
                        arrow_back</span>Back</a>';
                    }
                ?>
                <!-- 一覧 -->
                <!-- <a class="btn_postback" href="<?php echo home_url(); ?>/information-list">Blog Index</a> -->
            </div>
        </div>
        <div class="single_wrapper-right">
           <?php get_sidebar(); ?>
        </div>
    </div>
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
<!-- footer sticky -->
<?php
    include('footbnr.php');
?>
<?php
    include('footer-page.php');
?>
