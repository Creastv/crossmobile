<?php
$className = 'contact-form';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="contact-form-wrapper">
            <div class="cta-form-left-wrapper">
                <?php if (!empty(get_field('form_left'))) { ?>
                    <div class="cta-form">
                        <?php if (!empty(get_field('title_left'))) { ?>
                            <h4>
                                <?php echo get_field('title_left'); ?>
                            </h4>
                        <?php }; ?>
                        <?php if (!empty(get_field('subtitle_left'))) { ?>
                            <p>
                                <?php echo get_field('subtitle_left'); ?>
                            </p>
                        <?php }; ?>
                        <?php $form_title = get_field('form_left')->post_title; ?>
                        <?php $form_id = get_field('form_left')->ID; ?>
                        <div class="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="' . $form_title . '"]'); ?>
                        </div>
                    </div>
                <?php }; ?>
            </div>
            <div class="cta-form-right-wrapper">
                <div class="cta-form-wrapper-inner">
                    <div class="custom-icon">
                        <svg width="151" height="140" viewBox="0 0 151 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_449_8636)">
                                <path d="M118.865 81.4458C108.95 104.111 82.5429 114.434 59.9104 104.526C47.1345 98.9299 37.6902 87.703 34.3754 74.1454C33.0601 68.7848 32.7451 63.2286 33.4438 57.7434L14.8535 52.585C9.72059 87.1812 33.5906 119.396 68.1657 124.52C96.8495 128.781 124.778 112.972 135.91 86.1755L118.865 81.4458Z" fill="#E81F76"></path>
                                <path d="M77.1764 31.6316L63.2215 27.7594L66.6265 15.488C63.4991 13.3757 60.051 11.7879 56.4077 10.777L52.533 24.741L40.3184 21.3518C38.1899 24.4771 36.6019 27.9278 35.5903 31.5734L49.5452 35.4456L46.1085 47.831C49.236 49.9433 52.6841 51.5311 56.3273 52.542L60.1975 38.5942L72.4122 41.9835C74.5243 38.8536 76.1124 35.403 77.124 31.7573C77.124 31.7573 77.1927 31.6361 77.1601 31.6271L77.1764 31.6316Z" fill="#E81F76"></path>
                                <path d="M130.619 52.403C128.183 64.2772 116.579 71.9425 104.701 69.4879C92.834 67.054 85.1769 55.4466 87.6342 43.5606C87.8356 42.5824 88.102 41.6221 88.4335 40.6799C90.8655 28.8221 102.465 21.173 114.347 23.6114C126.214 26.0453 133.871 37.6527 131.414 49.5386C131.213 50.5169 130.946 51.4771 130.615 52.4193L130.619 52.403ZM93.7475 42.172C91.055 50.8025 95.8629 59.9892 104.483 62.6966C113.108 65.3878 122.291 60.5741 125 51.9481C125.095 51.6063 125.189 51.2645 125.28 50.939C127.972 42.3086 123.164 33.1218 114.544 30.4144C105.92 27.7232 96.7363 32.537 94.0275 41.1629C93.9327 41.5047 93.8423 41.8302 93.7475 42.172Z" fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_449_8636">
                                    <rect width="125.63" height="110.123" fill="white" transform="translate(29.4443) rotate(15.5082)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <?php if (!empty(get_field('form_right'))) { ?>
                        <div class="cta-form">
                            <?php if (!empty(get_field('form_title'))) { ?>
                                <h3>
                                    <?php echo get_field('form_title'); ?>
                                </h3>
                            <?php }; ?>
                            <?php if (!empty(get_field('form_description'))) { ?>
                                <p>
                                    <?php echo get_field('form_description'); ?>
                                </p>
                            <?php }; ?>
                            <?php $form_title = get_field('form_right')->post_title; ?>
                            <?php $form_id = get_field('form_right')->ID; ?>
                            <div class="contact-form">
                                <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="' . $form_title . '"]'); ?>
                            </div>
                        </div>
                    <?php }; ?>
                    <?php echo wp_get_attachment_image(get_field('image')['ID'], 'medium_large', 0, ['class' => 'form-right-image']); ?>
                </div>
            </div>
        </div>
    </div>
</section>