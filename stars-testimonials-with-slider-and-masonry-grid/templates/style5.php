<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure st-style5">
  <?php the_post_thumbnail( 'full' ); ?>
  <div class="border one">
    <div></div>
  </div>
  <div class="border two">
    <div></div>
  </div>
  <div class="figcaption">
    <div class="blockquote st-testimonial-content"><?php the_content(); ?></div>
    <div class="starrating st-rating">
      <?php do_action( 'stars_testimonial_display_rating', $stars ); ?>
    </div>
    <h5 class="st-testimonial-title"><?php the_title(); ?><span class="st-testimonial-company"><?php echo esc_html( $company ); ?></span></h5>
  </div> <?php echo ! empty( $url ) ? '<a href="' . esc_url( $url ) . '"></a>' : esc_url( $url ); ?>
</div>