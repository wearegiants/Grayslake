<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="google-site-verification" content="YSU-qEk3aXPOGcG8hAC6Md4u9gPzhvF0GhyWG7kMDOI" />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body <?php body_class('fs-grid'); ?>>
<div id="wrapper">

<?php if(is_front_page()): ?>
<header id="header__mission" class="banner banner__padded bg__color-darkBlue_fade relative">
  <div id="header__mission-wrapper">
    <div class='fs-row'>
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center">
<?php echo get_post_field('post_content', 6); ?>
      </div> 
    </div>
  </div>
</header>
<?php endif; ?>

<?php $logo = get_field('grayslake_logo', 6); ?>

<header id="header">
  <div class="fs-row">
    <div class="fs-cell fs-lg-third fs-md-half fs-sm-2 fs-centered hide">
      <h1 id="header__logo" class="text-center">
        <a href="/"><img src="/assets/img/grayslake_logo.svg" alt="<?php bloginfo( 'sitename' ) ?>" class="img-responsive" /></a>
      </h1>
    </div>
  </div>
  <menu id="header-navigation">
    <div class="text-center">
      <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
      <!--<a href="https://www.linkedin.com/in/paul-habibi-a6995a86" target="_blank" class="btn btn--nav btn--nav_icon ss-social-circle ss-linkedin"></a>-->
      <a href="https://www.linkedin.com/in/paul-habibi-a6995a86" target="_blank" class="btn btn--nav btn--nav_icon ss-social-circle ss-linkedin"></a>
    </div>
  </menu>
</header>

<div id="content-wrapper" class='fs-grid'>
