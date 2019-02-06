<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=yes">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome/css/all.css">
<!-- wp_head -->
<?php wp_head(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<!-- ie -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
<![endif]-->


<!-- タグマネ -->

</head>

<body>
<!-- タグマネ -->

<header id="header" class="header">
  <div class="inr">
    <div class="header-logo"><a href="<?php echo home_url(); ?>"></a></div>
    <div class="header-gnav">
      <nav class="gnav__list">
         <ul>
           <li><a href="<?php echo home_url(); ?>/about/">このサイトについて</a></li>
           <li><a href="<?php echo home_url(); ?>/boxlayout/">ボックスレイアウト</a></li>
           <li><a href="<?php echo home_url(); ?>/headline/">見出し</a></li>
           <li><a href="<?php echo home_url(); ?>/siteparts">サイトパーツ</a></li>
           <li><a href="<?php echo home_url(); ?>/custom/">カスタム</a></li>
           <li><a href="<?php echo home_url(); ?>/blog/">ブログ</a></li>
           <li><a href="<?php echo home_url(); ?>/blog/">電話番号やサブナビを設置</a></li>
        </ul>
      </nav>
    </div>
    <div class="menu">
      <div class="menu-line"></div>
      <div class="menu-line"></div>
      <div class="menu-line"></div>
    </div>
  </div>
</header>

