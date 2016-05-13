<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Mote
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="magnific-popup/magnific-popup.css">

<script type="text/javascript">
  $('.test-popup-link').magnificPopup({
  type: 'image'
  // other options
  });
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
      <nav class="top-bar" data-topbar role="navigation">
        <section class="top-bar-section">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'menu nav-bar')); ?>
        </section>
        <ul class="title-area">
          <li class="name">
            <?php
              $url = explode('?', $_SERVER['REQUEST_URI'])[0];
              $url = (preg_match("/\/zh\//",$url) ? site_url().'/zh/home-zh/' : site_url());
             ?>
            <h1><a href="#"><a href="<?php echo $url; ?>"><img src="<?php the_field('new_logo', 'options'); ?>" title="logo"></a></a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
      </nav>
    </header>
    <div id="content" class="site-content">
