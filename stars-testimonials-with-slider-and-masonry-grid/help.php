<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="star-testimonial-help-form">
    <form action="<?php echo admin_url( 'admin-ajax.php' ) ?>" method="post" id="star-testimonial-help-form">
        <div class="star-testimonial-help-header">
            <b><?php esc_html_e("Gal Dubinski", 'stars-testimonials') ?></b><?php esc_html_e("Co-Founder at Premio", 'stars-testimonials') ?> 
        </div>
        <div class="star-testimonial-help-content">
            <p><?php esc_html_e("Hello! Are you experiencing any problems with Stars Testimonials? Please let me know :)", 'stars-testimonials') ?></p>
            <div class="star-testimonial-form-field">
                <input type="text" name="user_email" id="user_email" placeholder="<?php esc_html_e("Email", 'stars-testimonials') ?>">
            </div>
            <div class="star-testimonial-form-field">
                <textarea type="text" name="textarea_text" id="textarea_text" placeholder="<?php esc_html_e("How can I help you?", 'stars-testimonials') ?>"></textarea>
            </div>
            <div class="form-button">
                <button type="submit" class="star-testimonial-help-button" ><?php esc_html_e("Chat") ?></button>
                <input type="hidden" name="action" value="wcp_star_testimonial_send_message_to_owner"  >
                <input type="hidden" name="star_testimonial_help_nonce" value="<?php echo wp_create_nonce('star_testimonial_help_nonce') ?>"  >
            </div>
        </div>
    </form>
</div>
<div class="star-testimonial-help-btn">
    <a class="star-testimonial-help-tooltip" href="javascript:;"><img src="<?php echo plugins_url( '/images/admin/owner.png', __FILE__) ?>" alt="<?php esc_html_e("Need help?", 'stars-testimonials') ?>"  /></a>
    <span class="tooltiptext"><?php esc_html_e("Need help?", 'stars-testimonials') ?></span>
</div>
<script>
    jQuery(document).on('ready', function(){
        jQuery("#star-testimonial-help-form").submit(function(){
            jQuery(".star-testimonial-help-button").attr("disabled",true);
            jQuery(".star-testimonial-help-button").text("<?php esc_html_e("Sending Request...") ?>");
            formData = jQuery(this).serialize();
            jQuery.ajax({
                url: "<?php echo admin_url( 'admin-ajax.php' ) ?>",
                data: formData,
                type: "post",
                success: function(responseText){
                    jQuery("#star-testimonial-help-form").find(".error-message").remove();
                    jQuery("#star-testimonial-help-form").find(".input-error").removeClass("input-error");
                    responseText = responseText.slice(0, - 1);
                    responseArray = jQuery.parseJSON(responseText);
                    if(responseArray.error == 1) {
                        jQuery(".star-testimonial-help-button").attr("disabled",false);
                        jQuery(".star-testimonial-help-button").text("<?php esc_html_e("Chat", 'stars-testimonials') ?>");
                        for(i=0;i<responseArray.errors.length;i++) {
                            jQuery("#"+responseArray.errors[i]['key']).addClass("input-error");
                            jQuery("#"+responseArray.errors[i]['key']).after('<span class="error-message">'+responseArray.errors[i]['message']+'</span>');
                        }
                    } else if(responseArray.status == 1) {
                        jQuery(".star-testimonial-help-button").text("<?php esc_html_e("Done!", 'stars-testimonials') ?>");
                        setTimeout(function(){
                            jQuery(".star-testimonial-help-header").remove();
                            jQuery(".star-testimonial-help-content").html("<p class='success-p'><?php esc_html_e("Your message is sent successfully.", 'stars-testimonials') ?></p>");
                        },1000);
                    } else if(responseArray.status == 0) {
                        jQuery(".star-testimonial-help-content").html("<p class='error-p'><?php esc_html_e("There is some problem in sending request. Please send us mail on <a href='mailto:contact@premio.io'>contact@premio.io</a>", 'stars-testimonials') ?></p>");
                    }
                }
            });
            return false;
        });
        jQuery(".star-testimonial-help-tooltip").on('click', function(e){
            e.stopPropagation();
            jQuery(".star-testimonial-help-form").toggleClass("active");
        });
        jQuery(".star-testimonial-help-form").on('click', function(e){
            e.stopPropagation();
        });
        jQuery("body").on('click', function(){
            jQuery(".star-testimonial-help-form").removeClass("active");
        });
    });
</script>