<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure st-style14">
  <div class="figcaption st-testimonial-bg">
    <div class="blockquote st-testimonial-content">
      <p><?php the_content(); ?>
    </div>
    <?php // translators: %s is replaced by the rating value. ?>
    <div class="starrating st-rating" title="<?php echo esc_attr( sprintf( esc_html__( 'Rated %s out of 5.0', 'stars-testimonials-with-slider-and-masonry-grid' ), $stars ) ); ?>">
    	<?php do_action( 'stars_testimonial_display_rating', $stars ); ?>
    </div>      
    <h3 class="st-testimonial-title"><?php the_title(); ?></h3>
    <h4 class="st-testimonial-company"><?php do_action( 'stars_testimonial_display_company', $company, $url); ?></h4>
  </div>
</div>