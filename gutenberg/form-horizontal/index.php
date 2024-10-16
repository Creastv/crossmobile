<?php
$className = 'cta-form-horizontal';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="custom-icon">
        <svg width="121" height="114" viewBox="0 0 121 114" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_2027_4400)">
                <path d="M91.8132 69.9023C82.1343 85.8522 61.3697 90.9291 45.4524 81.2608C36.4673 75.8011 30.5358 66.4654 29.4175 56.0004C28.9718 51.8621 29.2931 47.6776 30.3648 43.6475L16.9917 37.9336C9.6903 63.2797 24.2974 89.7447 49.6171 97.0307C70.6216 103.082 93.0729 94.0581 104.075 75.1413L91.8132 69.9023Z" fill="#E72176"></path>
                <path d="M65.6566 28.5015L55.618 24.2123L59.3916 15.3803C57.2666 13.4889 54.8493 11.9574 52.2285 10.8376L47.9344 20.8878L39.1477 17.1336C37.2443 19.2569 35.712 21.6774 34.5909 24.3012L44.6295 28.5904L40.8209 37.5044C42.9459 39.3958 45.3631 40.9273 47.9839 42.0471L52.2731 32.0086L61.0598 35.7628C62.9515 33.6345 64.4838 31.214 65.6048 28.5902C65.6048 28.5902 65.6683 28.5065 65.6449 28.4965L65.6566 28.5015Z" fill="#E72176"></path>
                <path d="M103.506 49.369C100.496 58.0008 91.0583 62.5705 82.4292 59.5484C73.8068 56.5431 69.2487 47.1017 72.2755 38.4631C72.524 37.752 72.8193 37.0609 73.1614 36.3898C76.1665 27.7696 85.5992 23.2117 94.2333 26.222C102.856 29.2274 107.414 38.6688 104.387 47.3074C104.139 48.0185 103.843 48.7096 103.501 49.3807L103.506 49.369ZM76.9823 38.0362C74.1058 44.2179 76.7776 51.5652 82.947 54.4505C89.1215 57.3241 96.4651 54.644 99.3533 48.4672C99.4584 48.2212 99.5635 47.9753 99.6636 47.741C102.54 41.5592 99.8682 34.212 93.6988 31.3266C87.5244 28.453 80.1807 31.1332 77.2926 37.3099C77.1874 37.5559 77.0874 37.7902 76.9823 38.0362Z" fill="black"></path>
            </g>
            <defs>
                <clipPath id="clip0_2027_4400">
                    <rect width="94.6989" height="83.0515" fill="white" transform="translate(33.1626 0.0871582) rotate(23.1354)"></rect>
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="container">
        <div class="cta-form-horizontal-wrapper">
            <div class="cta-form-menu-wrapper">
                <?php if (!empty(get_field('title'))) { ?>
                    <h2>
                        <?php echo get_field('title'); ?>
                    </h2>
                <?php }; ?>
                <?php if (!empty(get_field('buttons'))) { ?>
                    <div class="cta-form-menu">
                        <?php foreach (get_field('buttons') as $button) { ?>
                            <?php if (!empty($button['link'])) { ?>
                                <a href="<?php echo $button['link']['url'] ? $button['link']['url'] : '#'; ?>" title="<?php echo $button['link']['title'] ? $button['link']['title'] : ''; ?>" target="<?php echo $button['link']['target'] ? $button['link']['target'] : '_self'; ?>" class="btn btn-primary">
                                    <?php echo $button['link']['title'] ? $button['link']['title'] : ''; ?>
                                </a>
                            <?php }; ?>
                        <?php }; ?>
                    </div>
                <?php }; ?>
            </div>
            <div class="cta-form-wrapper">
                <?php echo wp_get_attachment_image(get_field('image')['ID'], 'medium', 0, ['class' => '']); ?>
                <?php if (!empty(get_field('form'))) { ?>
                    <div class="cta-form">
                        <h3>
                            <?php echo get_field('form_title'); ?>
                        </h3>
                        <p>
                            <?php echo get_field('form_description'); ?>
                        </p>
                        <?php $form_title = get_field('form')->post_title; ?>
                        <?php $form_id = get_field('form')->ID; ?>
                        <div class="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="' . $form_title . '"]'); ?>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
</section>