<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?></title>

  <!-- TYPEKIT -->
  <script src="//use.typekit.net/lug2lpk.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <?php //wp_head(); ?>

  <!-- SLICK SLIDER -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/template-replinish/assets/css/feast_styles.css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/template-replinish/assets/css/replinish.css" media="all">










</head>
<body <?php body_class(); ?> id="replinish">
