<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style8">
    <div class="star-author">
      <img width="440" height="320" class="attachment-full size-full wp-post-image" src="<?php echo plugins_url( '../../images/admin/user-thumb-'.$j.'.jpg', __FILE__ ) ?>" alt="<?php esc_html_e('User '.$j, 'stars-testimonials'); ?>"/>
      <h5 class="st-testimonial-title"><?php echo esc_attr($clientArray[$j-1]); ?></h5><span class="st-testimonial-company"><?php echo esc_attr($companyArray[$j-1]); ?></span>
    </div>
    <div class="blockquote st-testimonial-content st-testimonial-bg">
      <p><?php esc_html_e("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'stars-testimonials') ?></p>
      <span class="cp-load-after-post"></span>
    </div>
  </div>