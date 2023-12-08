<?php
    /*
    Template Name: information_list
    */
    include('header.php');
?>
<?php // 現在使用しているテンプレートファイルを表示
  if (is_user_logged_in()){ // ログイン中なら以下を表示
    global $template; // テンプレートファイルのパスを取得
    $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
    echo '現在使用しているテンプレートファイル：'.$temp_name; // ファイル名の表示
  }
?>
    <main>
        <div class="single_wrapper">
            <div class="single_wrapper-left">
                <section class="listpage">
                    <h1 class="listpage_title">おしらせ</h1>
                    <ul class="listpage_itemlist">
                        <!-- BLOGのループ処理開始 -->
                        <?php
                            if( wp_is_mobile() ) {{
                                $num = 300;
                            }} else {
                                $num = 500;
                            }
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args = [
                                'post_status' => 'publish',
                                'post_type' => 'information',
                                'paged' => $paged,
                                'posts_per_page' => 20,
                                'orderby'     => 'date',
                                'order' => 'DESC'
                            ];
                            $the_query = new WP_Query( $args );
                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <li class="listpage_itemlist-item">
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
                                    <p class="blog_date">
                                        <time datetime="<?php the_time('Y.m.d'); ?>">
                                            <?php the_time('Y.m.d'); ?>
                                        </time>
                                    </p>
                                </div>
                                <!-- アイキャッチ -->
                                <div class="blog_tmb">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'sample-img', 'alt' => the_title_attribute('echo=0'))); ?>
                                </div>
                                <!-- タイトル -->
                                <h2 class="blog_title">
                                    <?php echo wp_trim_words(get_the_title(), 16, '…'); ?>
                                </h2>
                            </a>
                             <!-- カテゴリー名 -->
                            <div class="blog_category">
                                <?php
                                    $cats = get_the_category();
                                    if($cats) {
                                        echo '<ul class="category_itemlist">';
                                        foreach($cats as $cat) {
                                            echo '<li class="item"><a href="' . get_category_link( $cat -> term_id ) . '">' . $cat -> name . '</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                                ?>
                            </div>
                            <!-- タグ -->
                            <div class="blog_tags">
                            <?php
                                $tags = get_the_tags();
                                if( $tags ){
                                    echo '<ul class="tag_itemlist">';
                                    foreach ( $tags as $tag ) {
                                        echo '<li class="item"><a href="' . get_tag_link( $tag->term_id ) . '">#' . $tag->name . '</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </div>
                        </li>
                        <?php endwhile; else: ?> <!-- while終了 & falseの場合は以下に続く -->
                            <p>記事がありません</p>
                        <?php endif ?> <!-- BLOGのループ処理終了 -->
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <!-- pagenation -->
                    <div class="pagenation">
                        <?php //ページリスト表示処理
                            global $wp_rewrite;
                            $paginate_base = get_pagenum_link(1);
                            if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                                $paginate_format = '';
                                $paginate_base = add_query_arg('paged','%#%');
                            } else {
                                $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                                user_trailingslashit('page/%#%/','paged');
                                $paginate_base .= '%_%';
                            }
                            echo paginate_links(array(
                                'base' => $paginate_base,
                                'format' => $paginate_format,
                                'total' => $the_query->max_num_pages,
                                'mid_size' => 1,
                                'current' => ($paged ? $paged : 1),
                                'prev_text' => 'prev',
                                'next_text' => 'next',
                            ));
                        ?>
                    </div>
                </section>
            </div>
            <div class="single_wrapper-right">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
    <!-- お問い合わせ -->
    <section class="form" id="form" name="form">
        <span class="section_heading-label">体験申し込みフォーム</span>
        <div class="form_wrapper">
            <?php echo do_shortcode('[contact-form-7 id="b8b731d" title="blessed_contactForm"]'); ?>
        </div>
    </section>
<!-- float banner -->
<div class="float_banner" id="float_banner">
    <a href="#form">
        <h3 class="float_banner_title">
            <span class="top">当日入会で</span>
            <span class="middle">体験＋入会金</span>
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
<?php
    include('footer.php');
?>