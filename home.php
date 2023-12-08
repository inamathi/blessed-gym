<?php
    include('header.php');
?>
<?php // 現在使用しているテンプレートファイルを表示
  if (is_user_logged_in()){ // ログイン中なら以下を表示
    global $template; // テンプレートファイルのパスを取得
    $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
    echo '現在使用しているテンプレートファイル：'.$temp_name; // ファイル名の表示
  }
?>
<main class="main">
    <article class="">
        <ul class="">
            <!-- 記事のループ -->
            <?php
                if(wp_is_mobile()) {
                    $num = 3; //全件取得の場合は-1
                } else {
                    $num = 5;
                }
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'post', //投稿タイプのslug（通常投稿の場合は'post'）
                    'paged' => $paged, //ページネーション
                    'post_per_page' => $num,
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()): while(have_posts()): the_post();
            ?>

            <li class="">
                <!-- 記事へリンク -->
                <a href="<?php the_permalink(); ?>" class="">
                    <!-- アイキャッチ -->
                    <div class="">
                        <?php the_post_thumbnail('post_thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                    </div>
                    <p class="">
                        <!-- 投稿日 -->
                        <time datetime="<?php the_time('Y.n.j'); ?>">
                            <?php the_time('Y.m.d')l ?>
                        </time>
                    </p>
                    <div class="">
                        <!-- カテゴリ１件表示（カテゴリ順上から）-->
                        <?php
                            $category = get_the_category();
                            echo '<span class="'.$category->slug.'">'.$category[0]->name.'</span>'
                        ?>
                    </div>
                    <h2 class="">
                        <!-- タイトル -->
                        <?php the_title(); ?>
                    </h2>
                    <div class="">
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            </li>
            <p>まだ記事がありません</p>
            <?php endif ?>
            <?php wp_reset_postdata(); ?>
            <!-- 記事のループ処理終了 -->
        </ul>
        <div class="">
            <?php
                the_posts_pagination( array(
                    'mid_size' => 1,
                    'prev_text' => '前の記事へ',
                    'next_text' => '次の記事へ',
                ));
            ?>
        </div>
    </article>
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