<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style16">
  <?php // translators: %s is replaced by the user number. ?>
  <img width="440" height="320" class="profile wp-post-image" src="<?php echo esc_url( plugins_url( '../../images/admin/user-thumb-'.$j.'.jpg', __FILE__ ) ); ?>" alt="<?php echo esc_attr( sprintf( esc_html__( 'User %s', 'stars-testimonials-with-slider-and-masonry-grid' ), $j ) ); ?>"/>
  <div class="figcaption">
    <h2 class="st-testimonial-title"><?php echo esc_html($clientArray[$j-1]); ?></h2>
    <h4 class="st-testimonial-company"><?php echo esc_html($companyArray[$j-1]); ?></h4>
    <?php // translators: %s is replaced by the rating value. ?>
    <div class="starrating st-rating" title="<?php echo esc_attr( sprintf( esc_html__( 'Rated %s out of 5.0', 'stars-testimonials-with-slider-and-masonry-grid' ), '4.5' ) ); ?>">
      <i class="pst-star"></i><i class="pst-star"></i><i class="pst-star"></i><i class="pst-star"></i><i class="pst-star-half-o"></i>
    </div>
    <div class="blockquote st-testimonial-bg st-testimonial-content">
      <p><?php esc_html_e("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'stars-testimonials-with-slider-and-masonry-grid') ?></p>
      <span class="cp-load-after-post"></span>
    </div>
  </div>
</div>
