<?php 
// Template Name: Homepage
get_header(); while(have_posts())  : the_post(); ?>

<main id="primary" class="site-main">

 <div class="hero-section">
    <div class="hero-inner">
      <div class="hero-image">
           <img src="<?php the_field('hero_image');?>" alt="">
       </div>
     <div class="hero-contents layout-padding">
         <?php if(get_field('hero_title')): ?>
              <h1><?php the_field('hero_title');?></h1>
         <?php endif; ?>

         <?php if(get_field('hero_content')): ?>
            <?php the_field('hero_content');?>
         <?php endif; ?>

         <?php if(get_field('hero_button_link')): ?>
            <div class="hero-btn">
                <a class="site-btn" href="<?php the_field('hero_button_link');?>">
                    <?php the_field('hero_button_title');?>
                </a>
            </div>
          <?php endif; ?>
     </div>
    </div>
 </div>
<!-- Hero Section End -->

<section class="about-us-section layout-padding pt-50 pb-50 pt-lg-135 pb-lg-165">
     <div class="about-us-inner">
         <div class="about-us-left">
            <div class="image-col1">
                <?php if(get_field('about_image_1')): ?>
                <div class="about-us-image media">
                    <img src="<?php the_field('about_image_1'); ?>" alt="">
                </div>
                <?php endif; ?>

                <?php if(get_field('about_image_3')): ?>
                <div class="about-us-image media">
                    <img src="<?php the_field('about_image_3'); ?>" alt="">
                </div>
                <?php endif; ?>
            </div>
            <div class="image-col2">
                <?php if(get_field('about_image_2')): ?>
                <div class="about-us-image media">
                    <img src="<?php the_field('about_image_2'); ?>" alt="">
                </div>
                <?php endif; ?>

                <?php if(get_field('about_image_4')): ?>
                <div class="about-us-image media">
                    <img src="<?php the_field('about_image_4'); ?>" alt="">
                </div>
                <?php endif; ?>
            </div>
           </div>
         <div class="about-us-right">
             <div class="section-title">
                <?php if(get_field('about_subtitle')): ?>
                    <span class="sec_subtitle"><?php the_field('about_subtitle');?></span>
                 <?php endif; ?>

                <?php if(get_field('about_title')): ?>
                    <h2><?php the_field('about_title');?></h2>
                <?php endif; ?>

                <?php if(get_field('about_content')): ?>
                    <?php the_field('about_content');?>
                 <?php endif; ?>

                 <?php if(get_field('about_button_link')): ?>
                   <a class="site-btn" href="<?php the_field('about_button_link');?>"><?php the_field('about_button_title');?></a>
                 <?php endif; ?>
             </div>
         </div>
     </div>
</section>
<!-- About Us Section End -->

<section class="services-section layout-padding pt-50 pb-50 pt-lg-95 pb-lg-95">
     <div class="section-title text-center">
         <?php if(get_field('service_subtitle')): ?>
             <span class="sec_subtitle"><?php the_field('service_subtitle');?></span>
         <?php endif; ?>
         <?php if(get_field('services_title')): ?>
            <h2><?php the_field('services_title');?></h2>
         <?php endif; ?>
     </div>

     <div class="post-boxes">
        <?php
            $arg = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1,   
                'order' => 'ASC',            
            ));
        ?>
        <?php if ($arg->have_posts()) : ?>
        <?php while ($arg->have_posts()) : $arg->the_post(); ?>
        <a href="#" class="post-box">
             <div class="post-thumb">
                <?php the_post_thumbnail(); ?>
            </div>
            <h3><?php the_title(); ?></h3>
        </a>
        <?php endwhile; wp_reset_postdata(); endif; ?>
       </div>
</section>
<!-- Service Section End -->

<section class="testimonials-section">
    <div class="testimonials-inner">
         <div class="testimonials-image"></div>
         <div class="testimonials-contents">
             
         </div>
    </div>
</section>

</main><!-- #main -->

<?php get_footer(); endwhile; ?>