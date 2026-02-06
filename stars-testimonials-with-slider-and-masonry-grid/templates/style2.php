<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style2">
  <?php the_post_thumbnail( 'thumbnail' ); ?>
  <div class="blockquote st-testimonial-bg st-testimonial-content">
  	<?php the_content(); ?>
  </div>
  <div class="star-author">
	  <?php // translators: %s is replaced by the rating value. ?>
	  <div class="starrating st-rating" title="<?php echo esc_attr( sprintf( esc_html__( 'Rated %s out of 5.0', 'stars-testimonials-with-slider-and-masonry-grid' ), $stars ) ); ?>">
	  	<?php do_action( 'stars_testimonial_display_rating', $stars ); ?>
	  </div>
    <h5 class="st-testimonial-title"><?php the_title(); ?> <span class="st-testimonial-company"><?php echo esc_html__( '- ', 'stars-testimonials-with-slider-and-masonry-grid' ); ?><?php do_action( 'stars_testimonial_display_company', $company, $url); ?></span></h5>
  </div>
</div>