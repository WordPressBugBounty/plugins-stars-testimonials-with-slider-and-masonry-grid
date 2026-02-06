<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure st-style14">
  <div class="figcaption st-testimonial-bg">
    <div class="blockquote st-testimonial-content">
      <p><?php esc_html_e("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'stars-testimonials-with-slider-and-masonry-grid') ?></p>
    </div>
    <?php // translators: %s is replaced by the rating value. ?>
    <div class="starrating st-rating" title="<?php echo esc_attr( sprintf( esc_html__( 'Rated %s out of 5.0', 'stars-testimonials-with-slider-and-masonry-grid' ), isset($stars)?$stars:0 ) ); ?>">
      <i class="pst-star"></i><i class="pst-star"></i><i class="pst-star"></i><i class="pst-star"></i><i class="pst-star-half-o"></i>
    </div>
    <h3 class="st-testimonial-title"><?php echo esc_html($clientArray[$j-1]); ?></h3>
    <h4 class="st-testimonial-company"><?php echo esc_html( $companyArray[$j-1]); ?></h4>
  </div>
</div>
