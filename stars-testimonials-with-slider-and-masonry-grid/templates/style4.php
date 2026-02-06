<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style4 st-testimonial-bg">
  <div class="blockquote st-testimonial-content"><?php the_content(); ?></div>
      <?php // translators: %s is replaced by the rating value. ?>
      	<div class="starrating st-rating" title="<?php echo esc_attr( sprintf( esc_html__( 'Rated %s out of 5.0', 'stars-testimonials-with-slider-and-masonry-grid' ), $stars ) ); ?>">
    		<?php do_action( 'stars_testimonial_display_rating', $stars ); ?>
    	</div>
  <div class="star-author"><?php the_post_thumbnail( 'thumbnail' ); ?>
    <h5 class="st-testimonial-title"><?php the_title(); ?></h5><span class="st-testimonial-company"><?php echo esc_html__( '- ', 'stars-testimonials-with-slider-and-masonry-grid' ); ?><?php do_action( 'stars_testimonial_display_company', $company, $url); ?></span>
  </div>
</div>