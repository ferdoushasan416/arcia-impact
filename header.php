<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arcia-impact
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<!-- Header Section Start -->
	<header id="masthead" class="site-header layout-padding">
       <div class="header-inline-wrapper">
            <div class="site-branding">
               <a href="<?php home_url(); ?>" class="site-logo">
					<img src="<?php the_field('site_logo','option');?>" alt="">
				</a>
            </div>
		   <div class="menu-trigger d-md-none">
			   <span></span>
			   <span></span>
			   <span></span>
		   </div>
             <!-- Menu Item -->
			  <div class="main-menu d-none d-md-block">
				  <?php
					wp_nav_menu( array(
						'theme_location'    => 'mainMenu',
						'container'         => 'div',
						'container_class'   => 'main-menu',
				   ) );
					?>
			    </div>
				<!-- Header Right Item -->
			 <div class="header-right d-none d-md-block">
				<a class="site-btn" href="<?php the_field('button_link','option');?>" ><?php the_field('button_title','option');?></a>
			</div>
		</div> 
	</header><!-- #masthead -->
<!-- Header Section End -->

<!-- Hamburger Menu Start -->
	<div class="hamburger-menu-wrapper d-md-none">
		<div class="hamburger-menu-inner">
			<div class="menu-close">
				 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg" alt="">
			</div>
			<div class="hamburger-menu">
				  <?php
					wp_nav_menu( array(
						'theme_location'    => 'mainMenu',
						'container'         => 'div',
						'container_class'   => 'mobile-menu',
				   ) );
					?>
			</div>
			<div class="hamburger-footer">
				<a class="site-btn" href="<?php the_field('button_link','option');?>" ><?php the_field('button_title','option');?></a>
			</div>
		</div> 
	</div>
<!-- Hamburger Menu End -->