<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$type = 'testimonial';
$get_type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING);
if($get_type === 'settings') {
    $type = 'settings';
}
?>
<div class="wrap">
    <nav class="nav-tab-wrapper woo-nav-tab-wrapper">
        <a href="<?php echo esc_url( admin_url( 'options-general.php?page=testimonial-setting' ) ); ?>" class="nav-tab <?php echo esc_attr(($type == "testimonial"?"nav-tab-active":"")) ?> "><?php esc_html_e('Testimonial Type', 'stars-testimonials-with-slider-and-masonry-grid'); ?></a>
        <a href="<?php echo esc_url( admin_url( 'options-general.php?page=testimonial-setting&type=settings' ) ); ?>" class="nav-tab <?php echo esc_attr(($type == "settings"?"nav-tab-active":"")) ?>"><?php esc_html_e('Testimonial Setting', 'stars-testimonials-with-slider-and-masonry-grid'); ?></a>
    </nav>
    <div class="testimonial-setting">
        <?php if($type == "testimonial") { ?>
        <h1><?php esc_html_e('Choose testimonial type', 'stars-testimonials-with-slider-and-masonry-grid'); ?></h1>
            <div class="testimonial-type">
                <div class="testimonial-col active" data-for="grid-form">
                    <div class="testimonial-img ">
                        <img src="<?php echo esc_url( plugins_url( '/images/grid.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Grid', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>"/>
                    </div>
                    <div class="testimonial-text">
                        <?php esc_html_e('Grid', 'stars-testimonials-with-slider-and-masonry-grid'); ?>
                    </div>
                </div>
                <div class="testimonial-col has-prow-feature" data-for="wall-form">
                    <img class="prow-feature-img" src="<?php echo esc_url( plugins_url( '/images/pro-feature.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Pro Feature', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>"/>
                    <div class="testimonial-img">
                        <img src="<?php echo esc_url( plugins_url( '/images/wall.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Wall', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>" />
                    </div>
                    <div class="testimonial-text">
                        <?php esc_html_e('Wall', 'stars-testimonials-with-slider-and-masonry-grid'); ?>
                    </div>
                </div>
                <div class="testimonial-col last has-prow-feature" data-for="slider-form">
                    <img class="prow-feature-img" src="<?php echo esc_url( plugins_url( '/images/pro-feature.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Pro Feature', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>"/>
                    <div class="testimonial-img">
                        <img src="<?php echo esc_url( plugins_url( '/images/slider.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Slider', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>" />
                    </div>
                    <div class="testimonial-text">
                        <?php esc_html_e('Slider', 'stars-testimonials-with-slider-and-masonry-grid'); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="testimonial-form-data active" id="grid-form">
                <div class="testimonial-grid-box">
                    <form action="" >
                        <div class="grid-form-row">
                            <div class="grid-form-row-left">
                                <div class="list_item">
                                    <input checked type="radio" class="radio-btn" name="choice" id="grid-style-1" />
                                    <label for="grid-style-1" class="label"><?php esc_html_e('Choose style #1', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                </div>
                                <a href="javascript:;" class="customize-button"><?php esc_html_e('Customize', 'stars-testimonials-with-slider-and-masonry-grid'); ?></a>
                            </div>
                            <div class="grid-form-row-right">
                                <img src="<?php echo esc_url( plugins_url( '/images/styles/style-1.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Style 1', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="grid-form-row">
                            <div class="grid-form-row-left">
                                <div class="list_item">
                                    <input type="radio" class="radio-btn" name="choice" id="grid-style-2" />
                                    <label for="grid-style-2" class="label"><?php esc_html_e('Choose style #2', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                </div>
                            </div>
                            <div class="grid-form-row-right">
                                <img src="<?php echo esc_url( plugins_url( '/images/styles/style-1.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Style 2', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="grid-form-row">
                            <div class="grid-form-row-left">
                                <div class="list_item">
                                    <input type="radio" class="radio-btn" name="choice" id="grid-style-3" />
                                    <label for="grid-style-3" class="label"><?php esc_html_e('Choose style #3', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                </div>
                            </div>
                            <div class="grid-form-row-right">
                                <img src="<?php echo esc_url( plugins_url( '/images/styles/style-1.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Style 3', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="grid-form-row">
                            <div class="grid-form-row-left">
                                <div class="list_item">
                                    <input type="radio" class="radio-btn" name="choice" id="grid-style-4" />
                                    <label for="grid-style-4" class="label"><?php esc_html_e('Choose style #4', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                </div>
                            </div>
                            <div class="grid-form-row-right">
                                <img src="<?php echo esc_url( plugins_url( '/images/styles/style-1.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Style 4', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="grid-form-row">
                            <div class="grid-form-row-left">
                                <div class="list_item">
                                    <input type="radio" class="radio-btn" name="choice" id="grid-style-5" />
                                    <label for="grid-style-5" class="label"><?php esc_html_e('Choose style #5', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                </div>
                            </div>
                            <div class="grid-form-row-right">
                                <img src="<?php echo esc_url( plugins_url( '/images/styles/style-1.png', __FILE__ ) ); ?>" alt="<?php echo esc_attr__( 'Style 5', 'stars-testimonials-with-slider-and-masonry-grid' ); ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="testimonial-form-data" id="wall-form">

            </div>

            <div class="testimonial-form-data" id="slider-form">
                <form action="" method="post">
                    <div class="setting-box">
                        <div class="setting-box-left">
                            <h2><?php esc_html_e('General settings', 'stars-testimonials-with-slider-and-masonry-grid'); ?></h2>
                            <table class="form-table">
                                <tr>
                                    <th scope="row">
                                        <label for="grid_columns"><?php esc_html_e('Columns:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <input type="hidden" name="grid_columns" id="grid_columns" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="grid_categories"><?php esc_html_e('Categories:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <select name="grid_categories" id="grid_categories" class="select-box" >
                                            <option><?php esc_html_e('-All', 'stars-testimonials-with-slider-and-masonry-grid'); ?></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="grid_no_of_testimonials"><?php esc_html_e('# of testimonials:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <input type="number" name="grid_no_of_testimonials" id="grid_no_of_testimonials" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="grid_orders"><?php esc_html_e('Order:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <select name="grid_categories" id="grid_categories" class="select-box" >
                                            <option><?php echo esc_html__( '-', 'stars-testimonials-with-slider-and-masonry-grid' ); ?></option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <h2><?php esc_html_e('Color settings', 'stars-testimonials-with-slider-and-masonry-grid'); ?></h2>
                            <table class="form-table">
                                <tr>
                                    <th scope="row">
                                        <label for="grid_columns"><?php esc_html_e('Stars:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <div class="custom-radios">
                                            <div>
                                                <input type="radio" class="yellow-color" name="color" value="#fff618" id="stars-yellow-color" checked >
                                                <label for="stars-yellow-color">
                                                  <span>
                                                    <i class="pst-check" aria-hidden="true"></i>
                                                  </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input type="radio" class="orange-color" name="color" value="#ffa318" id="stars-orange-color">
                                                <label for="stars-orange-color">
                                                  <span>
                                                    <i class="pst-check" aria-hidden="true"></i>
                                                  </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input type="radio" class="blue-color" name="color" value="#5278ff" id="stars-blue-color">
                                                <label for="stars-blue-color">
                                                  <span>
                                                    <i class="pst-check" aria-hidden="true"></i>
                                                  </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input type="radio" class="slate-blue-color" name="color" value="#72e484" id="stars-slate-blue-color">
                                                <label for="stars-slate-blue-color">
                                                  <span>
                                                    <i class="pst-check" aria-hidden="true"></i>
                                                  </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input type="radio" class="green-color" name="color" value="#72e484" id="stars-green-color">
                                                <label for="stars-green-color">
                                                  <span>
                                                    <i class="pst-check" aria-hidden="true"></i>
                                                  </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input type="radio" class="black-color" name="color" value="#696969" id="stars-black-color">
                                                <label for="stars-black-color">
                                                  <span>
                                                    <i class="pst-check" aria-hidden="true"></i>
                                                  </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input type="radio" class="brown-color" name="color" value="#bababa" id="stars-brown-color">
                                                <label for="stars-brown-color">
                                                  <span>
                                                    <i class="pst-check" aria-hidden="true"></i>
                                                  </span>
                                                </label>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="grid_columns"><?php esc_html_e('Text:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <input type="hidden" name="grid_columns" id="grid_columns" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="grid_columns"><?php esc_html_e('Background:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <input type="hidden" name="grid_columns" id="grid_columns" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="grid_columns"><?php esc_html_e('Title:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <input type="hidden" name="grid_columns" id="grid_columns" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="grid_columns"><?php esc_html_e('Company:', 'stars-testimonials-with-slider-and-masonry-grid'); ?></label>
                                    </th>
                                    <td>
                                        <input type="hidden" name="grid_columns" id="grid_columns" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="setting-box-right"></div>
                        <div class="clear"></div>
                    </div>
                </form>

            </div>

            <div class="testimonial-form-data" id="customize-setting">
                <h2><?php esc_html_e('General settings', 'stars-testimonials-with-slider-and-masonry-grid'); ?></h2>
                <form action="" method="post">
                    <div class="setting-box">
                        <div class="setting-box-left"></div>
                        <div class="setting-box-right"></div>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</div>
<?php include_once 'help.php'; ?>