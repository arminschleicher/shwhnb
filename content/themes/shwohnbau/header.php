<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<!-- LIVE RELOADING SCRIPT FOR DEV -->
		<script src="http://beta.sh-wohnbau.eu:1338/livereload.js"></script>
		<meta charset="utf-8" />
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
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />
		
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	<?php
    	$image = get_field('bannerbild');
  	?>
  	<section class="home-header-section preload-img" data-background-src="<?php echo $image['url'];?>">
		<?php do_action('foundationPress_layout_start'); ?>
		
		<nav class="tab-bar">
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>

		<?php get_template_part('parts/off-canvas-menu'); ?>

		<div id="frontpage-logo-container" class="small-centered small-10 columns height">
			<img class="preload-img" style="width: 195px; display: block; margin: 0 auto;" data-img-src="<?php img_uri('general/logo.svg')?>">
            </img>
		</div>
		<div id="frontpage-headertext-container" class="small-centered columns">
		    <h1><?php the_field('bannertext'); ?></h1>
		</div>
		<div id="frontpage-button-container" class="small-10 medium-2 small-centered medium-centered columns">
		    <a rel="m_PageScroll2id" href="#about" class="button radius small small-12 sans"><?php the_field('buttontext'); ?></a>
		</div>
    </section>
    <section class="container" role="document">
    	<?php do_action('foundationPress_after_header'); ?>