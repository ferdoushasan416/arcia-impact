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

     <div class="service-boxes">
        <?php
            $arg = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => -1,   
                'order' => 'ASC',            
            ));
        ?>
        <?php if ($arg->have_posts()) : ?>
        <?php while ($arg->have_posts()) : $arg->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="service-box">
             <div class="service-thumb">
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
        <?php if(get_field('testimonials_image')): ?>
            <div class="testimonials-image">
                <img src="<?php the_field('testimonials_image');?>" alt="">
            </div>
         <?php endif; ?>

         <?php if(get_field('testimonials_content')): ?>
            <div class="testimonials-contents layout-padding">
                <?php if(get_field('testimonials_subtitle')): ?>
                   <span class="sec_subtitle"><?php the_field('testimonials_subtitle');?></span>
                <?php endif?>   
                <?php if(get_field('testimonials_title')): ?>
                   <h2 class="testimonial-title"><?php the_field('testimonials_title');?></h2>
                <?php endif; ?>
                <?php if(get_field('testimonials_content')): ?>
                    <?php the_field('testimonials_content');?>
                    <?php endif; ?>
            <div class="testimonilas-info">
                <?php if(get_field('testimonials_thumbtitle')): ?>
                    <h4><?php the_field('testimonials_thumbtitle');?></h4>
                <?php endif; ?>   

                <div class="testimonial-thumb-boxes">
                <?php endif; ?>
                <div class="testimonial-thumb-image">
                <?php if( have_rows('testimonials_thumb') ): ?>
                <?php while ( have_rows('testimonials_thumb') ) : the_row(); ?>

                <?php if(get_sub_field('testimonilas_thumb_image')): ?>
                    <img src="<?php the_sub_field('testimonilas_thumb_image');?>" alt="">
                <?php endif; ?>
                <?php endwhile; else : endif; ?>
                </div>
                <?php if(get_field('testimonials_button_link')): ?>
                <div class="testimonial-btn">
                    <a href="<?php the_field('testimonials_button_link');?>"><?php the_field('testimonials_button_title');?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/arrow-right.svg" alt="">
                </a>
                </div>
                <?php endif; ?>
             </div>
           </div>
        </div>
    </div>
</section>
<!-- Testimonials Section End -->

<section class="contact-section layout-padding">
    <div class="contact-inner">
        <?php if(get_field('map_image')): ?>
        <div class="contact-map">     
           <img src="<?php the_field('map_image');?>" alt="">
        </div>
        <?php endif; ?>
       <div class="contact-form-wrap">
           <div class="contact-form">
             <form action="post">
                 <div class="field-input-wrap">
                     <div class="field">
                        <label for="name">Name</label>
                         <input type="text" id="name">
                     </div>
                     <div class="field">
                         <label for="company">Company</label>
                         <input type="text" id="company">
                     </div>
                     <div class="field">
                         <label for="phone">Phone</label>
                         <input type="text" id="phone">
                     </div>
                     <div class="field">
                         <label for="adress">Adress</label>
                         <input type="text" id="adress">
                     </div>
                    </div>
                    <div class="field-form-footer">
                     <div class="field">
                         <label for="message">Message</label>
                         <textarea name="message" id="message"></textarea>
                     </div>
                        <div class="field">
                            <input type="Submit">
                        </div>
                 </div>
             </form>
          </div>
        <div class="contact-info">
            <?php if(get_field('contact_subtitle')): ?>
                 <span class="sec_subtitle"><?php the_field('contact_subtitle');?></span>
            <?php endif; ?>
            <?php if(get_field('contact_title')): ?>
                <h3><?php the_field('contact_title');?></h3>
            <?php endif; ?>
            <?php if(get_field('contact_content')): ?>
                <?php the_field('contact_content');?>
            <?php endif ;?>
            <div class="business-hour-bottom">
                <?php if(get_field('business_title')): ?>
                   <h4><?php the_field('business_title');?></h4>
                <?php endif; ?>
                <?php if(get_field('time_deatles')): ?>
                     <?php the_field('time_deatles');?>
                 <?php endif; ?>
            </div>
        </div>
       </div>
    </div>
</section>


</main><!-- #main -->

<?php get_footer(); endwhile; ?>