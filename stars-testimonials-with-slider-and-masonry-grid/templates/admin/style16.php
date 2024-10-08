<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style16">
  <img width="440" height="320" class="profile wp-post-image" src="<?php echo plugins_url( '../../images/admin/user-thumb-'.$j.'.jpg', __FILE__ ) ?>" alt="<?php esc_html_e('User '.$j, 'stars-testimonials'); ?>"/>
  <div class="figcaption">
    <h2 class="st-testimonial-title"><?php echo esc_attr($clientArray[$j-1]); ?></h2>
    <h4 class="st-testimonial-company"><?php echo esc_attr($companyArray[$j-1]); ?></h4>
    <div class="starrating st-rating" title="Rated 4.5 out of 5.0">
      <i class="pst-star"></i><i class="pst-star"></i><i class="pst-star"></i><i class="pst-star"></i><i class="pst-star-half-o"></i>
    </div>
    <div class="blockquote st-testimonial-bg st-testimonial-content">
      <p><?php esc_html_e("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'stars-testimonials') ?></p>
      <span class="cp-load-after-post"></span>
    </div>
  </div>
</div>
