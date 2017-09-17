<?php ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="***********">
    <meta name="keywords" content="***********">
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' | '; } ?>
        <?php bloginfo('name'); ?>
    </title>
    <!-- canonicalパターン1 -->
    <link rel=”canonical” href="<?php echo (empty($_SERVER[" HTTPS "]) ? "http:// " : "https:// ") . $_SERVER["HTTP_HOST "] . $_SERVER["REQUEST_URI "]; ?>">
    <!-- canonicalパターン2 -->
    <?php
        if (is_home()) {
          $canonical_url  = get_bloginfo('url');
        } elseif (is_category()) {
          $canonical_url=get_category_link(get_query_var('cat'));
        } elseif (is_page() || is_single()) {
          $canonical_url = get_permalink();
            } if ( $paged >= 2 || $page >= 2) {
          $canonical_url = $canonical_url.'page/'.max( $paged, $page ).'/';
        } elseif(is_404()) {
          $canonical_url =  get_bloginfo('url')."/404";
        } else {
          $canonical_url  = get_bloginfo('url');
        }
    ?>
        <link rel="canonical" href="<?php echo $canonical_url; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=yes">
        <meta name="format-detection" content="telephone=no">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
        <link rel="icon" type="image/png" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
        <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
        <!-- css -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>">
        <script src="https://use.fontawesome.com/3d23e71c77.js"></script>
        <!-- wp_head -->
        <?php wp_head(); ?>
        <!-- og -->
        <meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?>">
        <?php if (is_single()) { ?>
        <meta property="og:type" content="article">
        <?php } else { ?>
        <meta property="og:type" content="website">
        <?php } ?>
        <meta property="og:description" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?>">
        <meta property="og:url" content="<?php echo(" http:// " . $_SERVER["HTTP_HOST "] . $_SERVER["REQUEST_URI "]); ?>">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp.jpg">
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
        <!-- ie -->
        <!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
<![endif]-->
        <!-- googleAnalytics -->
</head>

<body>
    <!--[if lt IE 9]>
<div class="legacy-ie">
  <p>お使いのブラウザでは、表示が崩れることがあります。<br>
  <a href="http://browsehappy.com/">他のブラウザ</a>をインストールすることで正しく表示することができます。</p>
</div>
<![endif]-->
    <noscript>
        <div class="noscript">サイトを快適に利用するためには、JavaScriptを有効にしてください。</div>
    </noscript>
    <header class="header">
        <div class="container">
            <div class="description">モジュール・パーツ テンプレート集 【HTML5+CSS3 レスポンシブテーマ】</div>
            <h1 class="logo"><a href="<?php echo home_url(); ?>"><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></a></h1>
            <div class="menu">
                <div class="menu-line"></div>
                <div class="menu-line"></div>
                <div class="menu-line"></div>
            </div>
            <div class="gnavWrap">
                <div class="gnav">
                    <nav>
                        <ul>
                            <li><a href="/about/">このサイトについて</a></li>
                            <li><a href="/boxlayout/">ボックスレイアウト</a></li>
                            <li><a href="/headline/">見出し</a></li>
                            <li><a href="/siteparts">サイトパーツ</a></li>
                            <li><a href="/custom/">カスタム</a></li>
                            <li><a href="/blog/">ブログ</a></li>
                            <li><a href="/blog/">電話番号やサブナビを設置</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <?php if( !( is_front_page( ) ) ): ?>
    <?php breadcrumbs(); ?>
    <?php endif; ?>
