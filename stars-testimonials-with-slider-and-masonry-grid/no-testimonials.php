<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="wrap">
    <div class="testimonial-setting">
        <h1><?php esc_html_e('All Widget Shortcodes', 'stars-testimonials-with-slider-and-masonry-grid'); ?><a href='<?php echo esc_url(PRO_PLUGIN_URL) ?>' target="_blank" class='upgrade-block-button open-popup'><?php esc_html_e('Upgrade to Pro', 'stars-testimonials-with-slider-and-masonry-grid') ?></a> <?php if(count($results)!=0) { ?> <a href="<?php echo esc_url( site_url('wp-admin/edit.php?post_type=stars_testimonial&page=all-shortcodes&task=add-new') ) ?>" class="button pull-right add-new-shortcode"><?php esc_html_e('New Widget Shortcode', 'stars-testimonials-with-slider-and-masonry-grid') ?> </a> <?php } ?></h1>
        <div class="clearfix"></div>
    </div>
    <div class="no-testimonial-box">
        <p><?php esc_html_e('In order to create your first widget shortcode, please make sure you’ve created at least one testimonial that will be shown in the widget', 'stars-testimonials-with-slider-and-masonry-grid'); ?></p>
        <div class="no-testimonial-record"><a class="link add-testimonial-record" href="<?php echo esc_url( admin_url('/') . 'post-new.php?post_type=stars_testimonial' ); ?>"><?php esc_html_e('Create Your First Testimonial', 'stars-testimonials-with-slider-and-masonry-grid'); ?></a></div>
        <?php 
            // Escape iframe HTML output using wp_kses with allowed tags/attributes
            $allowed_html = array(
                'div' => array(
                    'class' => true,
                    'style' => true,
                ),
                'iframe' => array(
                    'src' => true,
                    'width' => true,
                    'height' => true,
                    'frameborder' => true,
                    'allowfullscreen' => true,
                    'style' => true,
                ),
            );
            echo wp_kses( $this->iframeCode, $allowed_html ); 
        ?>
    </div>
</div>