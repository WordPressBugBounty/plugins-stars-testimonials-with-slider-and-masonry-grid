<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style16">
  <?php the_post_thumbnail( 'thumbnail', array('class' => 'profile') ); ?>
  <div class="figcaption">
    <h2 class="st-testimonial-title"><?php the_title(); ?></h2>
    <h4 class="st-testimonial-company"><?php echo esc_html__( '- ', 'stars-testimonials-with-slider-and-masonry-grid' ); ?><?php do_action( 'stars_testimonial_display_company', $company, $url); ?></h4>
    <?php // translators: %s is replaced by the rating value. ?>
    <div class="starrating st-rating" title="<?php echo esc_attr( sprintf( esc_html__( 'Rated %s out of 5.0', 'stars-testimonials-with-slider-and-masonry-grid' ), $stars ) ); ?>">
    	<?php do_action( 'stars_testimonial_display_rating', $stars ); ?>
    </div>    
    <div class="blockquote st-testimonial-bg st-testimonial-content"><?php the_content(); ?></div>
  </div>
</div>