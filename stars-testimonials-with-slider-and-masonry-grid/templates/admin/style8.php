<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style8">
    <div class="star-author">
      <?php // translators: %s is replaced by the user number. ?>
      <img width="440" height="320" class="attachment-full size-full wp-post-image" src="<?php echo esc_url( plugins_url( '../../images/admin/user-thumb-'.$j.'.jpg', __FILE__ ) ); ?>" alt="<?php echo esc_attr( sprintf( esc_html__( 'User %s', 'stars-testimonials-with-slider-and-masonry-grid' ), $j ) ); ?>"/>
      <h5 class="st-testimonial-title"><?php echo esc_html( $clientArray[$j-1] ); ?></h5><span class="st-testimonial-company"><?php echo esc_html__( '- ', 'stars-testimonials-with-slider-and-masonry-grid' ); ?><?php echo esc_html( $companyArray[$j-1] ); ?></span>
    </div>
    <div class="blockquote st-testimonial-content st-testimonial-bg">
      <p><?php esc_html_e("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'stars-testimonials-with-slider-and-masonry-grid') ?></p>
      <span class="cp-load-after-post"></span>
    </div>
  </div>
