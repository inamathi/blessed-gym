<?php
    include('header-page.php');
?>
<main>
    <div class="single_wrapper">
        <div class="single_wrapper-left">
            <section class="listpage">
                <h1 class="listpage_title"><span class="">投稿月</span><?php echo the_time('Y.m'); ?></h1>
                <ul class="listpage_itemlist">
                    <!-- BLOGのループ処理開始 -->
                    <?php
                        $date_y = get_the_date('Y');
                        $date_m = get_the_date('m');
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $args = [
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'paged' => $paged,
                            'posts_per_page' => 20,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'year' => $date_y,
                            'monthnum' => $date_m,
                        ];
                        $the_query = new WP_Query( $args );
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <li class="listpage_itemlist-item">
                        <!-- 記事へのリンク -->
                        <a href="<?php the_permalink(); ?>" class="">
                            <!-- 投稿日 -->
                            <p class="blog_date">
                                <time datetime="<?php the_time('Y.m.d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                            </p>
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
                    <a class="btn_postback" href="<?php echo home_url(); ?>/blog-list">Blog Index</a>
                </div>
            </section>
        </div>
        <div class="single_wrapper-right">
            <?php get_sidebar(); ?>
        </div>
    </div>
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
<!-- footer sticky -->
<section id="footer_sticky" class="footer_sticky">
    <a href="#form">
        <div class="footer_sticky_split">
            <span class="material-symbols-outlined">
                pan_tool_alt
            </span>
            <span class="text">
                Click!
            </span>
        </div>
        <h3 class="footer_sticky_title">
            <span class="top">当日入会で</span>
            <span class="bottom">体験＋入会金
                <span class="material-symbols-outlined">
                    arrow_right_alt
                </span>
                <span>無料！</span>
            </span>
        </h3>
    </a>
</section>
</main>
<?php
    include('footer-page.php');
?>