<?php
    /*
    Template Name: template_STAFF
    */
    include('header-page.php');
?>
<main>
    <div class="single_wrapper">
        <div class="single_wrapper-left">
            <ul class="staff_itemlist">
                <?php
                    $args = array(
                        'post_type'=> 'staff',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'meta_key' => 'staff_number',
                        'orderby'  => array('meta_value_num' => 'ASC'), // 表示順をもとにソート
                        // 'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                    );
                    // クエリに合致した投稿を絞り込み
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post );
                    $staffList = SCF::get('staff_item');
                        foreach ($staffList as $staff) {
                            $thumbnail = wp_get_attachment_image_src($staff['staff_thumbnail'], 'full');
                        ?>
                        <li class="staff_itemlist-item">
                            <div class="thumbnail">
                                <img src="<?php echo  $thumbnail[0]; ?>" />
                            </div>
                            <div class="profile">
                                <p class="subtitle"><?php echo $staff['staff_subtitle']; ?></p>
                                <p class="name"><?php echo $staff['staff_name']; ?></p>
                                <p class="name-en"><?php echo $staff['staff_name_en']; ?></p>
                                <p class="memo"><?php echo $staff['staff_memo']; ?></p>
                            </div>
                        </li>
                <?php } ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
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