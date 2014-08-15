<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="test" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
 

  <div class="off-canvas-wrap">
  <div class="inner-wrap">
  <div class="content-wrap">
  <?php
    $image = get_field('bannerbild');
  ?>
  <section class="home-header-section preload-img" data-background-src="<?php echo $image['url'];?>">
  <nav class="tab-bar">
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    </section>
    <section class="middle tab-bar-section">
    </section>
  </nav>
  <div class="small-2 small-centered columns margin-top70">
      <div class="top-bar-logo-container">
        <img id="top-bar-logo" class="preload-img" data-img-src="<?php img_uri('general/nav-logo.png')?>">
        </img>
      </div>
  </div>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
  <!--
        <div class="top-bar-container contain-to-grid show-for-medium-up">
            <nav class="top-bar  medium-12 medium-centered  rows" data-topbar="">
                <section class="top-bar-section">
                    <div id="top-bar-menu-left" class="medium-5 left">
                      <?php foundationPress_top_bar_l(); ?>
                    </div>
                    <div class="medium-2 columns">
                      <div class="top-bar-logo-container">
                        <img id="top-bar-logo" class="preload-img" data-img-src="<?php //img_uri('general/nav-logo.png')?>">
                        </img>
                      </div>
                    </div>
                    <div id="top-bar-menu-right" class="medium-5 right">
                      <?php foundationPress_top_bar_r(); ?>
                    </div>
                </section>
            </nav>
        </div>
      -->
  </section>
<header class="row" role="banner">
  <div class="small-12 columns">
    
  </div>
</header>

<section class="container" role="document">
  <div class="row">