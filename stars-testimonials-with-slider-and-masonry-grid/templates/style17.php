<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure st-style17">
  <div class="figcaption st-testimonial-bg"><?php the_post_thumbnail( 'thumbnail', array('class' => 'profile') ); ?>
    <div class="blockquote st-testimonial-content"><?php the_content(); ?></div>
  </div>
  <h3 class="st-testimonial-title"><?php the_title(); ?><span class="st-testimonial-company"><?php echo esc_html__( '- ', 'stars-testimonials-with-slider-and-masonry-grid' ); ?><?php do_action( 'stars_testimonial_display_company', $company, $url); ?></span></h3>
    <?php // translators: %s is replaced by the rating value. ?>
    <span class="starrating st-rating" title="<?php echo esc_attr( sprintf( esc_html__( 'Rated %s out of 5.0', 'stars-testimonials-with-slider-and-masonry-grid' ), $stars ) ); ?>">
    	<?php do_action( 'stars_testimonial_display_rating', $stars ); ?>
    </span>  
</div>