<aside id="sidebar">
<!-- Search -->
<!-- <?php get_search_form(); ?> -->
<!-- Information -->
<section class="newest">
    <h2 class="section_heading-sidebar">おしらせ</h2>
    <ul class="newest_itemlist">
        <!-- BLOGのループ処理開始 -->
        <?php
            if( wp_is_mobile() ) {{
                $num = 2;
            }} else {
                $num = 2;
            }
            $args = [
                'post_type' => 'information',
                'posts_per_page' => $num,
            ];
            $the_query = new WP_Query( $args );
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <li class="newest_itemlist-item">
            <div class="item-left">
                <a href="<?php the_permalink(); ?>" class="">
                    <!-- アイキャッチ -->
                    <div class="blog_tmb">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'sample-img', 'alt' => the_title_attribute('echo=0'))); ?>
                    </div>
                </a>
            </div>
            <div class="item-right">
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
                </div>
                <a href="<?php the_permalink(); ?>" class="">
                    <p class="blog_date">
                        <time datetime="<?php the_time('Y.m.d'); ?>">
                            <?php the_time('Y.m.d'); ?>
                        </time>
                    </p>
                    <h2 class="blog_title">
                        <?php echo wp_trim_words(get_the_title(), 18, '…'); ?>
                    </h2>
                </a>
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
            </div>
        </li>
        <?php endwhile; else: ?> <!-- while終了 & falseの場合は以下に続く -->
            <p>記事がありません</p>
        <?php endif ?> <!-- BLOGのループ処理終了 -->
        <?php wp_reset_postdata(); ?>
    </ul>
    <div class="btn_pagelink">
        <a href="<?php echo home_url(); ?>/information-list">
            おしらせ一覧を見る
            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
        </a>
    </div>
</section>
<!-- Topics -->
<section class="newest">
    <h2 class="section_heading-sidebar">Topics</h2>
    <ul class="newest_itemlist">
        <!-- BLOGのループ処理開始 -->
        <?php
            if( wp_is_mobile() ) {{
                $num = 4;
            }} else {
                $num = 4;
            }
            $args = [
                'post_type' => 'topics',
                'posts_per_page' => $num,
            ];
            $the_query = new WP_Query( $args );
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <li class="newest_itemlist-item">
            <div class="item-left">
                <a href="<?php the_permalink(); ?>" class="">
                    <!-- アイキャッチ -->
                    <div class="blog_tmb">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'sample-img', 'alt' => the_title_attribute('echo=0'))); ?>
                    </div>
                </a>
            </div>
            <div class="item-right">
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
                </div>
                <a href="<?php the_permalink(); ?>" class="">
                    <p class="blog_date">
                        <time datetime="<?php the_time('Y.m.d'); ?>">
                            <?php the_time('Y.m.d'); ?>
                        </time>
                    </p>
                    <h2 class="blog_title">
                        <?php echo wp_trim_words(get_the_title(), 18, '…'); ?>
                    </h2>
                </a>
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
            </div>
        </li>
        <?php endwhile; else: ?> <!-- while終了 & falseの場合は以下に続く -->
            <p>記事がありません</p>
        <?php endif ?> <!-- BLOGのループ処理終了 -->
        <?php wp_reset_postdata(); ?>
    </ul>
    <div class="btn_pagelink">
        <a href="<?php echo home_url(); ?>/topics-list">Topics一覧を見る
            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
        </a>
    </div>
</section>
<!-- カテゴリリスト -->
<!-- <section class="categorylist">
    <h2 class="section_heading-sidebar-list">カテゴリ</h2>
    <?php
        $args = array(
            'parent' => 0,
            'orderby' => 'term_order',
            'order' => 'ASC'
        );
        $cats = get_categories($args);
        if($cats) {
            echo '<ul class="category_itemlist">';
            foreach($cats as $cat) {
                echo '<li class="category_itemlist-item"><a href="' . get_category_link( $cat -> term_id ) . '">' . $cat -> name . '</a></li>';
            }
            echo '</ul>';
        }
    ?>
</section> -->

<!-- タグリスト -->
<!-- <section class="taglist">
    <h2 class="section_heading-sidebar-list">タグ</h2>
    <input type="checkbox" class="acd-check" id="acd-check-tag">
    <label class="acd-label" for="acd-check-tag"></label>
    <ul class="tag_itemlist">
        <?php
            $args = array(
                'orderby' => 'count',
                'order' => 'desc',
                // 'number' => 20
                );
            $posttags = get_terms('post_tag', $args);
            if ($posttags) {
            foreach($posttags as $tag) {
            echo '<li class="category_itemlist-item"><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '('. $tag->count .')</a></li>';
            }
        }
        ?>
    </ul>
</section> -->
<!-- 月別 -->
<!-- <section class="archivelist">
    <h2 class="section_heading-sidebar-list">アーカイヴ</h2>
    <ul class="archive_itemlist">
        <?php wp_get_archives('show_post_count=1&type=monthly&limit=24'); ?>
    </ul>
</section> -->
</aside>