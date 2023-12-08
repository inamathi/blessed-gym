<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
  <head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TMM0G26HP7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TMM0G26HP7');
  </script>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- functions.phpに記述 <link href="style.css" rel="stylesheet" /> -->
    <?php wp_head(); ?>
    <!-- Slick CSS -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500;800&family=Noto+Sans+JP:wght@400;600;700&family=Rubik:wght@500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> -->
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico">
  </head>
  <body>
    <?php wp_body_open(); ?>
    <header id="header_mobile" class="header">
      <div class="icon_wrapper">
        <a href="#gyminfo">
          <span class="material-symbols-outlined custom">map</span>
        </a>
      </div>
      <div class="header_mobile-logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo_blessed-hor-text-nega.svg" alt="BLESSED conditioning gym">
        </a>
      </div>
      <div class="header_mobile_top">
          <input id="drawer_checkbox" class="drawer_checkbox" type="checkbox">
          <label id="drawer_icon" for="drawer_checkbox"><span></span></label>
          <label id="drawer_checkbox-close" for="drawer_checkbox"></label>
          <nav id="drawer_content" class="drawer_content">
            <ul id="header_gnav">
              <li><a href="#top">TOP</a></li>
              <li><a href="#price">コース＆料金</a></li>
              <li><a href="#gyminfo">アクセス＆BLESSEDの紹介</a></li>
              <li><a href="#topics">Topics</a></li>
              <li><a href="#strengths">BLESSEDの強み</a></li>
              <li><a href="#inquiry">よくある質問</a></li>
              <li><a href="#form">体験申し込みフォーム</a></li>
              <li>
                <ul class="sns_iconlist">
                  <li class="sns_iconlist-item">
                    <a href="https://www.instagram.com/blessedgym_official/" class="mask-m" target="_blank">
                      <span class="mask_icon-insta"></span>
                    </a>
                  </li>
                  <li class="sns_iconlist-item">
                    <a href="https://lin.ee/zpxh9B6" class="mask-m" target="_blank">
                      <span class="mask_icon-line"></span>
                    </a>
                  </li>
                  <li class="sns_iconlist-item">
                    <a href="<?php echo home_url(); ?>#form" class="mask-m">
                      <span class="mask_icon-mail"></span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
      </div>
    </header>
    <!-- wide -->
    <header id="header_wide" class="header">
      <div class="header_wrapper">
        <div class="header_wide_left">
            <h1 class="title">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_blessed-hor.svg" alt="コンディショニングジム「ブレスド」" class="header_wide_logo" />
            </h1>
        </div>
        <div class="header_wide_right">
          <div class="reserve">
            <h2 class="title">体験申し込みは</h2>
            <ul class="iconlist">
              <li class="icon">
                  <a href="https://www.instagram.com/blessedgym_official/" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_insta-color.svg">
                </a>
              </li>
              <li class="icon">
                <a href="https://lin.ee/zpxh9B6" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_line-color.svg">
                </a>
              </li>
              <li class="icon">
                <a href="<?php echo home_url(); ?>/#form">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_mail-color.svg">
                </a>
              </li>
            </ul>
          </div>
          <nav class="gnav" id="header_gnav">
          <ul id="header_gnav">
              <li><a href="#top">TOP</a></li>
              <li><a href="#price">コース＆料金</a></li>
              <li><a href="#gyminfo">アクセス＆BLESSEDの紹介</a></li>
              <li><a href="#topics">Topics</a></li>
              <li><a href="#strengths">BLESSEDの強み</a></li>
              <li><a href="#inquiry">よくある質問</a></li>
              <li><a href="#form">体験申し込みフォーム</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>