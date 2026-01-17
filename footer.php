<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arcia-impact
 */

?>

	<footer id="colophon" class="site-footer layout-padding pt-50 pb-50 pt-lg-75 pb-lg-80">
	    <div class="footer-inline-wrapper">
			<div class="footer-widget-box">
				<div class="footer-logo">
					<a href="<?php home_url(); ?>" class="footer-logo">
					   <img src="<?php the_field('footer-logo','option');?>" alt="">
			    	</a>
				</div>
				<div class="footer-description">
					<?php the_field('footer_description','option');?>
				</div>
			</div>
			<div class="footer-widget-box">
				<?php if (is_active_sidebar( 'link' ) ) {
			        dynamic_sidebar( 'link' ); 
	        	} ?>
			</div>
			<div class="footer-widget-box">
				<?php if (is_active_sidebar( 'Contact' ) ) {
			        dynamic_sidebar( 'Contact' ); 
	        	} ?>
			</div>
		</div>
		<div class="footer-copyright-area text-center">
			<p><?php the_field('footer_copyright','option');?></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
