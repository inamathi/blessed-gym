<?php
  function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));
  }
  add_action('after_setup_theme', 'my_setup');
/* CSSとJavaScriptの読み込み */
function my_script_init()
  { // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // Google Fonts（複数のfontを利用する場合は、第2引数に空の配列、第3引数に'null'を渡す）
    wp_register_style( 'googleFonts', '//fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP:wght@400;500;600&family=BIZ+UDPGothic:wght@400;700&family=Wix+Madefor+Display:wght@400;500;600&display=swap', "array()", null);
    wp_enqueue_style( 'googleFonts');
    // Google Icon
    wp_register_style( 'googleIcon', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', "", "1.0.1", true);
    wp_enqueue_style( 'googleIcon');
    // jQueryの読み込み
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);
    wp_enqueue_script( 'jquery-min', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js', "", "1.0.1", true);
    // Font-Awesome
    // wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/a5ae670604.js', "", "1.0.1", true);
    // wp_enqueue_script( 'slick-min-js', 'cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', "", "1.0.1", true);
    // Swiper(gsapの横スクロールは scrollTriggerが被り、誤動作するのでswiperを採用)
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '1.0.1', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_script( 'submit-js', get_template_directory_uri() . '/js/submit.js', array(), '1.0.1', true );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'gsap-scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'gsap-carousel', get_template_directory_uri() . '/js/carousel.js', array(), '1.0.1', true );
    wp_enqueue_script( 'gsap-accordion', get_template_directory_uri() . '/js/accordion.js', array(), '1.0.1', true );
    wp_enqueue_script( 'gsap-newicon', get_template_directory_uri() . '/js/new.js', array(), '1.0.1', true );
    wp_enqueue_script( 'gsap-popup', get_template_directory_uri() . '/js/popup.js', array(), '1.0.1', true );
    wp_enqueue_script( 'gsap-effects', get_template_directory_uri() . '/js/effects.js', array(), '1.0.1', true );
    wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/css/reset.css', array(), '1.0.1' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1' );
    wp_enqueue_style( 'swiper-bundle-min', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), '1.0.1');
    wp_enqueue_style( 'swiper-min', 'https://unpkg.com/swiper@8/swiper.min.css', array(), '1.0.1');
    // Slick CSSの読み込み
    // wp_enqueue_style( 'slick-theme-min-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', "", "1.0.1", true);
    // wp_enqueue_style( 'slick-min-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', "", "1.0.1", true);
  }
  add_action('wp_enqueue_scripts', 'my_script_init');

/* カスタム投稿タイプを定義 */
add_action('init', 'create_post_type');
function create_post_type()
{
  /* お知らせ */
  register_post_type('information', [ // 投稿タイプ名の定義
  'labels' => [
    'name' => 'おしらせ', // 管理画面上で表示する投稿タイプ名
    'singular_name' => 'information', // カスタム投稿の識別名
  ],
  'public' => true, // 投稿タイプをpublicにするか
  'has_archive' => true, // アーカイブ機能ON/OFF
  'menu_position' => 4, // 管理画面上での配置場所(投稿の下に配置)
  'show_in_rest' => true, // wordpress5.x系から出てきた新エディタ「Gutenberg」を有効にする
  'supports' => array('title', 'editor', 'author', 'name', 'thumbnail', 'excerpt', 'custom-fields' ,'comments'), // カスタム投稿で使用する項目を設定（タイトル、エディター、アイキャッチ）
  ]);
  register_taxonomy('category_info', 'information', [
    'label' => 'カテゴリー',
    'hierarchical' => true,
    'public' => true,
    'show_in_rest' => true,
  ]);
  register_taxonomy(
    'tag_info', 'information', [
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
  ]);
/* トピックス */
  register_post_type('topics', [
  'labels' => [
    'name' => 'トピックス',
    'singular_name' => 'topics',
  ],
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'author', 'name', 'thumbnail', 'excerpt', 'custom-fields' ,'comments'),
  ]);
  register_taxonomy(
    'category_topics', //登録するタクソノミーの具体的な名前
    'topics', // タクソノミーを登録するカスタム投稿タイプ名
    [
    'label' => 'カテゴリー',
    'hierarchical' => true,
    'public' => true,
    'show_in_rest' => true,
    'update_count_callback' => '_update_post_term_count',
  ]);
  register_taxonomy(
    'tag_topics', 'topics', [
    'label' => 'タグ',
    'hierarchical' => false,
    'public' => true,
    'show_in_rest' => true,
    'update_count_callback' => '_update_post_term_count',
  ]);
  register_post_type('staff', [
  'labels' => [
    'name' => 'スタッフ',
    'singular_name' => 'staff',
  ],
  'public' => true,
  'has_archive' => true,
  'menu_position' => 6,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
]);
  register_post_type('inquiry', [
  'labels' => [
    'name' => 'よくある質問',
    'singular_name' => 'inquiry',
  ],
  'public' => true,
  'has_archive' => true,
  'menu_position' => 7,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
]);
}

//SVGをアップロード
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

// メニュー設定
function register_my_menus()
{
  register_nav_menus(array(
  'main-menu' => 'Main Menu',
  'about-menu' => 'about menu',
  'tab-menu' => 'tab menu',
  ));
}
add_action('after_setup_theme', 'register_my_menus');

// サイドバー設定
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side-title">',
    'after_title' => '</h3>'
 ));
}

// サイドバーに月別投稿数を表示
add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
	$output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/','（$2）</a>',$output);
	return $output;
}

// 最新３日以内にNEW
function add_new_to_title( $title, $id ) {
	if (in_the_loop() &&  $id == get_the_ID() && !is_single()) {
                $posttime= get_the_time( 'U' , $id );
                $nowtime= time ();
                if($nowtime-$posttime<604800){
    		     return "NEW ".$title;
                }
	}
	return $title;
}
add_filter('the_title', 'add_new_to_title', 10, 2);
?>