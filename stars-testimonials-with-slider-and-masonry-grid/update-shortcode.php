<?php
if ( ! defined( 'ABSPATH' ) ) exit;
global $wpdb;
$tableName = $wpdb->prefix . DB_TESTIMONIAL_TABLE_NAME;
$id = (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'])?$_GET['id']:'';
if(empty($id)) {
    echo "<script>window.location='".admin_url("edit.php?post_type=stars_testimonial&page=all-shortcodes")."';</script>";
}
$query = "SELECT * FROM {$tableName} WHERE id = '%d'";
$query = $wpdb->prepare($query, $id);
$result = $wpdb->get_row($query);
if(empty($result)) {
    echo "<script>window.location='".admin_url("edit.php?post_type=stars_testimonial")."';</script>";
}

?>

<div class="wrap">
    <div class="testimonial-setting">
        <h1><?php esc_html_e('Update Shortcode', 'stars-testimonials'); ?><a target="_blank" href='<?php echo PRO_PLUGIN_URL ?>' class='upgrade-block-button open-popup'><?php esc_html_e("Upgrade to Pro", 'stars-testimonials') ?></a></h1>
        <div class="clearfix"></div>
        <div class="testimonial-type" style="display: none" >
            <h2><?php esc_html_e('Choose testimonial style', 'stars-testimonials'); ?> </h2>
            <div class="testimonial-col <?php echo esc_attr(($result->testimonial_type == "grid")) ?"active":"" ?>" data-for="grid-form" data-value="grid">
                <div class="testimonial-img ">
                    <img src="<?php echo plugins_url( '/images/admin/grid.svg', __FILE__ ) ?>" alt="<?php esc_html_e('Grid', 'stars-testimonials'); ?>"/>
                </div>
                <div class="testimonial-text">
                    <?php esc_html_e('Grid', 'stars-testimonials'); ?>
                </div>
            </div>
            <div class="testimonial-col <?php echo esc_attr(($result->testimonial_type == "wall"))?"active":"" ?> has-prow-feature" data-for="custom-form" data-value="wall">
                <a target="_blank" href="<?php echo PRO_PLUGIN_URL ?>" >
                    <div class="testimonial-img">
                        <img src="<?php echo plugins_url('/images/admin/wall-pro-feature.svg', __FILE__ ) ?>" alt="<?php esc_html_e('Wall', 'stars-testimonials'); ?>" />
                    </div>
                    <div class="testimonial-text">
                        <?php esc_html_e('Wall', 'stars-testimonials'); ?>
                    </div>
                </a>
            </div>
            <div class="testimonial-col <?php echo esc_attr(($result->testimonial_type == "slider"))?"active":"" ?> has-prow-feature last" data-for="slider-form" data-value="slider">
                <a target="_blank" href="<?php echo PRO_PLUGIN_URL ?>" >
                    <div class="testimonial-img">
                        <img src="<?php echo plugins_url('/images/admin/slider-pro-feature.svg', __FILE__ ) ?>" alt="<?php esc_html_e('Slider', 'stars-testimonials'); ?>" />
                    </div>
                    <div class="testimonial-text">
                        <?php esc_html_e('Slider', 'stars-testimonials'); ?>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="testimonial-form-data grid-box" id="grid-form">
            <div class="testimonial-grid-box">
                <form action="" method="post" >
                    <?php
                    $clientArray = array("Tim Forever","Hans Down","Desmond Eagle");
                    $companyArray = array("UX Design","Web Inc.","Accountant");
                    ?>
                    <?php $start = 1; $end=17; for($i=$start;$i<=$end;$i++) { ?>
                    <div class="grid-form-row <?php echo esc_attr(($result->testimonial_style == $i))?"active":"" ?>">
                        <div class="grid-form-row-full">
                            <div class="grid-style-box">
                                <?php $to = ($i==10)?2:3; for($j=1;$j<=$to;$j++) { ?>
                                    <div class="col-1-<?php echo esc_attr($to) ?>">
                                        <?php include "templates/admin/style".$i.".php"; ?>
                                    </div>
                                <?php } ?>
                            <div class="clearfix"></div>
                            </div>

                            <div class="grid-form-row-hover">
                                <input type="radio" class="sr-only" name="testimonial_style" id="grid-style-<?php echo esc_attr($i)?>" value="<?php echo esc_attr($i)?>" <?php echo esc_attr(($i>5))?"disabled":"" ?> />
                                <label for="grid-style-<?php echo esc_attr($i) ?>"><a <?php echo ($i<=5)?'href="javascript:;"':'href="'.PRO_PLUGIN_URL.'" target="_blank" '; ?> class="testimonial-button is-hidden <?php echo esc_attr(($i>5))?"disabled-class":"customize-button" ?>"><?php echo esc_attr(($i<=5))?__('Customize', 'stars-testimonials'):__('Upgrade to Pro', 'stars-testimonials'); ?></a></label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="testimonial-form-data not-pro-version <?php echo esc_attr($result->testimonial_type) ?>-form" id="custom-form" style="display: block;">
            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>&submit=true" method="post" id="testimonial_form">
                <input type="hidden" name="testimonial_type" id="testimonial_type" value="<?php echo esc_attr($result->testimonial_type) ?>" />
                <input type="hidden" name="testimonial_style" id="testimonial_style" value="<?php echo esc_attr($result->testimonial_style) ?>" />
                <div class="setting-box">
                    <div class="setting-box-left">
                        <h2><?php esc_html_e('General settings', 'stars-testimonials'); ?></h2>
                        <?php
                        $arg = array(
                            'taxonomy' => 'stars_testimonial_cat',
                            'hide_empty' => false,
                            'order' => "ASC",
                            'orderby' => 'name'
                        );
                        $terms = get_terms($arg);
                        ?>
                        <table class="form-table">
                            <tr>
                                <th scope="row">
                                    <label for="shortcode_name"><?php esc_html_e("Shortcode name", 'stars-testimonials') ?>:</label>
                                </th>
                                <td>
                                    <input class="form-control required" value="<?php echo esc_attr($result->shortcode_name) ?>" id="shortcode_name" type="text" name="shortcode_name" />

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="font_family"><?php esc_html_e("Font Family", 'stars-testimonials') ?>:</label>
                                </th>
                                <td>
                                    <?php $fonts = $GLOBALS['fontFamily']; ?>
                                    <?php foreach($fonts as $key=>$value) { ?>
                                        <link href="https://fonts.googleapis.com/css?family=<?php echo urlencode($value) ?>" rel="stylesheet" tyle="text/css">
                                    <?php } ?>
                                    <div class="custom-select-box" id="font-family">
                                        <input type="text" readonly class="form-control custom-select" name="font_family" id="font_family" <?php echo esc_attr(($result->font_family==""))?"":"style='font-family: {$result->font_family}'" ?> value="<?php echo esc_attr(($result->font_family==""))?"Default":$result->font_family ?>" >
                                        <span class="select-arrow"></span>
                                        <div name="font_family" id="font_family" class="select-content" >
                                            <ul>
                                                <li data-value='Default' class="<?php echo esc_attr(($result->font_family==""))?"active":"" ?>"><?php esc_html_e("Default", 'stars-testimonials') ?></li>
                                                <?php foreach($fonts as $key=>$value) {
                                                    echo "<li class='".((esc_attr($result->font_family) == $value)?"active":"")."' style='font-family: ".$value."' data-value='{$value}'>{$value}</li>";
                                                } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="grid_columns"><?php esc_html_e("Columns", 'stars-testimonials') ?>:</label>
                                </th>
                                <td>
                                    <div class="grid-columns-box">
                                        <input class="grid-columns" id="grid_columns" type="text" min="1" max="5" value="<?php echo esc_attr($result->grid_columns) ?>" name="grid_columns" step="1" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="grid_categories"><?php esc_html_e("Categories", 'stars-testimonials') ?>:</label>
                                </th>
                                <td>
                                    <div class="select-box">
                                        <?php
                                        $selectedCategory = $result->testimonial_categories;
                                        $selectedCategoryArray = explode(",",$selectedCategory);
                                        ?>
                                        <select name="testimonial_categories[]" id="grid_categories" class="select-box select2" multiple="multiple" >
                                            <?php foreach($terms as $term) {
                                                echo "<option ".((in_array($term->term_id, $selectedCategoryArray)?"selected":""))." value='{$term->term_id}'>{$term->name}</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="no_of_testimonials"><?php esc_html_e("# of testimonials", 'stars-testimonials') ?>:</label>
                                </th>
                                <td>
                                    <input type="number" class="form-control" name="no_of_testimonials" id="no_of_testimonials" value="<?php echo esc_attr($result->no_of_testimonials) ?>" min="1" step="1"/>                                    
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="testimonial_order"><?php esc_html_e("Order", 'stars-testimonials') ?>:</label>
                                </th>
                                <td>
                                    <div class="select-box">
                                        <select name="testimonial_order" id="testimonial_order" class="select-box" >
                                            <option <?php echo esc_attr($result->testimonial_order)==1?"selected":"" ?> value="1"><?php esc_html_e("Date ascending", 'stars-testimonials') ?></option>
                                            <option <?php echo esc_attr($result->testimonial_order)==2?"selected":"" ?> value="2"><?php esc_html_e("Date descending", 'stars-testimonials') ?></option>
                                            <option <?php echo esc_attr($result->testimonial_order)==3?"selected":"" ?> value="3"><?php esc_html_e("Title ascending", 'stars-testimonials') ?></option>
                                            <option <?php echo esc_attr($result->testimonial_order)==4?"selected":"" ?> value="4"><?php esc_html_e("Title descending", 'stars-testimonials') ?></option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="has_character_limit"><?php esc_html_e("Character limit", 'stars-testimonials') ?>:</label>
                                    <span class="tooltip-message">
										<span class="custom-tooltip" style="text-align:left; z-index:99999">
											<span class="tooltip-text"><?php esc_html_e("Turn on to enforce character limit for every testimonial", 'stars-testimonials') ?></span>
											<span class="dashicons dashicons-editor-help"></span>
										</span>
									</span>
                                </th>
                                <td>
                                    <label class="testimonial-switch">
                                        <input type="checkbox" class="form-control" name="has_character_limit" id="has_character_limit" value="1" disabled />
                                        <span class="slider round"><!--ADDED HTML --><span class="on">On</span><span class="off">Off</span></span>
                                    </label>
                                    <label for="enable_visitor_review">
                                        <a href="<?php echo admin_url("edit.php?post_type=stars_testimonial&page=collect_review_page") ?>" target="_blank" class="pro-feature-link"><?php esc_html_e("Pro Feature") ?></a>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="has_read_more"><?php esc_html_e("Read more") ?>:</label>
                                    <span class="tooltip-message">
										<span class="custom-tooltip" style="text-align:left; z-index:99999">
											<span class="tooltip-text"><?php esc_html_e("Show a read more button to view the full testimonial in a separate pop-up. If turned off, sliced off testimonials due to character limit will not have a read more button to view the rest of it", 'stars-testimonials') ?></span>
											<span class="dashicons dashicons-editor-help"></span>
										</span>
									</span>
                                </th>
                                <td>
                                    <label class="testimonial-switch">
                                        <input type="checkbox" class="form-control" name="has_read_more" id="has_read_more" value="1" disabled />
                                        <span class="slider round"><!--ADDED HTML --><span class="on">On</span><span class="off">Off</span></span>
                                    </label>
                                    <label for="enable_visitor_review">
                                        <a href="<?php echo admin_url("edit.php?post_type=stars_testimonial&page=collect_review_page") ?>" target="_blank" class="pro-feature-link"><?php esc_html_e("Pro Feature") ?></a>
                                    </label>
                                </td>
                            </tr>
							<tr>
                                <th scope="row">
                                    <label for="enable_visitor_review"><?php esc_html_e("Collect testimonials from your visitors") ?>:</label>
									<span class="tooltip-message">
										<span class="custom-tooltip" style="text-align:left; z-index:99999">
											<span class="tooltip-text"><?php esc_html_e("Collect testimonials from your website's visitors by showing a button under your testimonials widget. Your testimonials will be added once you approve them. You can also create a direct link to your clients so they can submit their testimonials.", 'stars-testimonials') ?></span>
											<span class="dashicons dashicons-editor-help"></span>
										</span>
									</span>
                                </th>
								<td>
									<label class="testimonial-switch">
										<input type="checkbox" class="form-control" name="enable_visitor_review" id="enable_visitor_review" value="1" disabled />										
										<span class="slider round"><!--ADDED HTML --><span class="on"><?php esc_html_e("On", 'stars-testimonials') ?></span><span class="off"><?php esc_html_e("Off", 'stars-testimonials') ?></span><!-- END--></span>
									</label>
									<label for="enable_visitor_review">										
										<a href="<?php echo admin_url("edit.php?post_type=stars_testimonial&page=collect_review_page") ?>" target="_blank" class="pro-feature-link"><?php esc_html_e("Pro Feature") ?></a>
									</label>
								</td>
							</tr>
                        </table>
                        <h2><?php esc_html_e('Color settings', 'stars-testimonials'); ?></h2>
                        <?php
                        global $settingArray;
                        ?>
                        <table class="form-table" id="custom-color">
                            <?php foreach($settingArray as $title) {
                                $customColor = isset($result->{$title['slug']."_color_custom"})?$result->{$title['slug']."_color_custom"}:"";
                                ?>
                                <tr class="dynamic-color-col color-<?php echo esc_attr($title['slug']) ?>-col" data-col="<?php echo esc_attr($title['slug']) ?>">
                                    <th scope="row">
                                        <label for=""><?php echo esc_attr($title['title']) ?>:</label>
                                    </th>
                                    <td class="color-row" data-class="<?php echo esc_attr($title['class']) ?>">
                                        <div class="custom-radios">
                                            <input type="hidden" name="<?php echo esc_attr($title['slug']) ?>_color" value="" />
                                            <?php foreach($title['color'] as $key=>$color) { ?>
                                                <style>
                                                    .color-<?php echo esc_attr($title['slug']) ?>-col .custom-radios input[type="radio"].color-<?php echo esc_attr($key) ?> + label span {
                                                        background-color: #<?php echo esc_attr($color)?>;
                                                        border-color: #<?php echo esc_attr($color) ?>;
                                                    }
                                                </style>
                                                <div>
                                                    <input type="radio" class="color-<?php echo esc_attr($key) ?>" name="<?php echo esc_attr($title['slug']) ?>_color" <?php echo esc_attr($result->{$title['slug']."_color"})==$color?"checked":"" ?> value="<?php echo esc_attr($color) ?>" id="<?php echo esc_attr($title['slug'])."-".$key ?>-color">
                                                    <label for="<?php echo esc_attr($title['slug'])."-".$key ?>-color">
                                                      <span>
                                                        <i class="pst-check" aria-hidden="true"></i>
                                                      </span>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="custom-color-box">
                                            <div class="custom-color-box">
                                                <div class="inline-block">
                                                    <span><i class="pst-question" aria-hidden="true"></i></span>
                                                </div>
                                                <div class="inline-block">
                                                    <input class="custom-color testimonial-color-picker form-control" placeholder="FFFFFF" disabled />
                                                </div>
                                                <div class="inline-block">
                                                    <a target="_blank" href="<?php echo PRO_PLUGIN_URL ?>"  class="pro-feature-link"><?php esc_html_e("Pro Feature","stars-testimonials") ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th scope="row">
                                    <label for="enable_google_schema"><?php esc_html_e("Support Rating Schema", "stars-testimonials") ?>:</label>
                                    <span class="tooltip-message">
										<span class="custom-tooltip" style="text-align:left; z-index:99999">
											<span class="tooltip-text"><?php esc_html_e("Add rating schema to your page for Google search pages. Rating schema will load on the page where you place the shortcode and it'll be updated automatically as per the total number of reviews and the average review", 'stars-testimonials') ?></span>
											<span class="dashicons dashicons-editor-help"></span>
										</span>
									</span>
                                </th>
                                <td>
                                    <input type="hidden" class="form-control" name="enable_google_schema" value="0" />
                                    <label class="testimonial-switch" for="enable_google_schema">
                                        <input type="checkbox" class="form-control" name="enable_google_schema" id="enable_google_schema" value="1" disabled />
                                        <span class="slider round"><!--ADDED HTML --><span class="on">On</span><span class="off">Off</span><!-- END--></span>
                                    </label>
                                    <label for="enable_google_schema"><?php esc_html_e("Enable ratings schema where this widget is loaded", "stars-testimonials") ?>:</label>
                                    <label for="enable_google_schema">
                                        <a href="<?php echo admin_url("edit.php?post_type=stars_testimonial&page=collect_review_page") ?>" target="_blank" class="pro-feature-link"><?php esc_html_e("Pro Feature") ?></a>
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="setting-box-right">
                        <div class="preview-section">
                            <div class="preview-inner" id="preview-box">
                                <?php
                                echo "<style>";
                                if($result->stars_color != "") {
                                    echo "#preview-box .starrating{color:#{esc_attr".esc_attr($result->stars_color)."}";
                                }
                                if($result->text_color != "") {
                                    echo "#preview-box .st-testimonial-content{color:#".esc_attr($result->text_color)."}";
                                }
                                if($result->background_color != "") {
                                    echo "#preview-box figure.style2 blockquote.st-testimonial-bg{background-color:#".esc_attr($result->background_color)."}";
                                }
                                if($result->title_color != "") {
                                    echo "#preview-box .st-testimonial-title{color:#".esc_attr($result->title_color)."}";
                                }
                                if($result->company_color != "") {
                                    echo "#preview-box .st-testimonial-company{color:#".esc_attr($result->company_color)."}";
                                }
                                if($result->font_family != "") {
                                    echo ".custom-select, #preview-box figure, #preview-box blockquote{font-family:".esc_attr($result->font_family)."}";
                                }
                                echo "</style>";
                                ?>
                                <?php $j = 1; include "templates/admin/style".esc_attr($result->testimonial_style).".php"; ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="preview-buttons">
                            <a href="javascript:;" class="testimonial-button pull-left back-button" ><i class="pst-arrow-left"></i> <?php esc_html_e("Back", 'stars-testimonials') ?></a>
                            <a href="javascript:;" class="submit-button testimonial-button" ><?php esc_html_e("Finish", 'stars-testimonials') ?> <i class="pst-arrow-right"></i></a>
                            <div class="clearfix"></div>
                            <a href="javascript:;" class="reset-button testimonial-button" ><i class="pst-refresh"></i> <?php esc_html_e("Reset", 'stars-testimonials') ?></a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <input type="hidden" name="action" value="save_testimonial_setting">
                <input type="hidden" name="id" value="<?php echo esc_attr($result->id) ?>">
                <input type="hidden" name="nonce" value="<?php echo wp_create_nonce("star_testimonial_update_nonce_".$result->id) ?>" >
            </form>
        </div>
        <div style="display: none">
            <div id="pro-popup">
                <div class="pro-popup">
                    <div class="pro-popup-content">
                        <h2><?php esc_html_e("Upgrade", 'stars-testimonials') ?></h2>
                        <p class="title-text"><?php esc_html_e("Get all Pro features for just <span>$19/year</span>", 'stars-testimonials') ?></p>
                        <p><?php esc_html_e("(We will not automatically renew your plan)", 'stars-testimonials') ?></p>
                        <div class="pro-features">
                            <ul>
                                <li><?php esc_html_e("Infinite testimonials", 'stars-testimonials') ?></li>
                                <li><?php esc_html_e("Custom color (HEX code)", 'stars-testimonials') ?></li>
                                <li><?php esc_html_e("Wall and slider testimonials", 'stars-testimonials') ?></li>
                                <li><?php esc_html_e("All template styles", 'stars-testimonials') ?> </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="pro-feature-form">
                            <form action="" method="post">
                                <div class="pro-feature-input">
                                    <label for="website_url"><?php esc_html_e("Your website URL:", 'stars-testimonials') ?></label>
                                    <input type="text" name="website_url" id="website_url" placeholder="www.yourdomain.com">
                                </div>
                                <div class="pro-feature-button">
                                    <button type="submit" class="paypal-button"><img src="<?php echo plugins_url( '/images/admin/paypal-button.jpg', __FILE__ ) ?>" alt="<?php esc_html_e('Buy now with paypal', 'stars-testimonials'); ?>" /></button>
                                    <span><?php esc_html_e("14 days money back guarantee", 'stars-testimonials') ?></span>
                                </div>
                                <div class="pro-payment-options">
                                    <img src="<?php echo plugins_url( '/images/admin/payment-options.png', __FILE__ ) ?>" alt="<?php esc_html_e('Payment Options', 'stars-testimonials'); ?>" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="pro-popup-footer">
                        <div class="client-testimonial-list">
                            <div class="client-testimonial">
                                <div class="client-testimonial-left">
                                    <img src="<?php echo plugins_url( '/images/admin/client-image.png', __FILE__ ) ?>" alt="<?php esc_html_e('Client image Options', 'stars-testimonials'); ?>" />
                                </div>
                                <div class="client-testimonial-right">
                                    <p><?php esc_html_e('Just installed chaty a couple days back. Was a bit skeptical. Then some leads came through via whatsapp on my site haha. Sold', 'stars-testimonials'); ?></p>
                                    <p class="client-name"><?php esc_html_e('Deepak Shukla, pearllemon', 'stars-testimonials'); ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'help.php'; ?>