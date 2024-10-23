<?php
$className = 'text-image-features';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="text-image-features-wrapper">
            <div class="text-image-features-inner">
                <div class="features-title">
                    <h2 class="h1">
                        <?php echo get_field('title'); ?>
                    </h2>
                </div>
                <div class="features-description">
                    <?php echo get_field('description'); ?>
                </div>
                <?php if (!empty(get_field('features'))) { ?>
                    <div class="features-list">
                        <?php foreach (get_field('features') as $single) { ?>
                            <div class="feature-single">
                                <div class="feature-icon">
                                    <?php echo wp_get_attachment_image($single['icon']['ID'], 'thumbnail', 0, ['class' => '']); ?>
                                </div>
                                <?php echo $single['description']; ?>
                            </div>
                        <?php }; ?>
                    </div>
                <?php }; ?>
            </div>
            <div class="text-image-product">
                <div class="text-image-logo">
                    <?php echo wp_get_attachment_image(get_field('logo')['ID'], 'medium', 0, ['class' => '']); ?>
                </div>
                <div class="text-image-wrapper">
                    <?php echo wp_get_attachment_image(get_field('image')['ID'], 'medium_large', 0, ['class' => '']); ?>
                    <div class="image-logo">
                        <svg width="213" height="205" viewBox="0 0 213 205" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Warstwa_1" clip-path="url(#clip0_78_1178)">
                                <path id="Vector"
                                    d="M158.539 74.9655C169.361 105.503 153.372 139.017 122.871 149.816C105.652 155.91 86.5725 153.64 71.2635 143.653C65.2062 139.708 59.9293 134.681 55.6848 128.813L33.3005 140.532C59.3778 178.189 111.037 187.596 148.666 161.53C179.891 139.914 192.423 99.7961 179.062 64.2205L158.539 74.9655Z"
                                    fill="#E81F76" />
                                <path id="Vector_2"
                                    d="M74.0913 64.697L57.2884 73.4939L49.5527 58.7181C44.6725 59.5003 39.9556 61.071 35.5688 63.3676L44.3716 80.1815L29.6642 87.8814C30.4292 92.7741 32.0018 97.4936 34.2999 101.883L51.1028 93.0863L58.9103 107.999C63.7905 107.217 68.5074 105.646 72.8942 103.35L64.1017 86.5555L78.8091 78.8556C78.0245 73.9732 76.4519 69.2536 74.1538 64.864C74.1538 64.864 74.1109 64.6867 74.0717 64.7072L74.0913 64.697Z"
                                    fill="#E81F76" />
                                <path id="Vector_3"
                                    d="M143.762 36.6855C152.068 50.2143 147.844 67.9306 134.295 76.2225C120.776 84.5238 103.064 80.289 94.7678 66.7304C94.0841 65.6152 93.4788 64.459 92.9518 63.2618C84.6566 49.7526 88.8905 32.056 102.429 23.7444C115.949 15.4432 133.661 19.6779 141.957 33.2365C142.64 34.3517 143.246 35.5079 143.773 36.7051L143.762 36.6855ZM99.366 59.9287C104.522 70.5872 117.343 75.0603 128.005 69.9278C138.657 64.7756 143.122 51.9518 137.985 41.283C137.77 40.8715 137.554 40.46 137.349 40.0681C132.193 29.4096 119.372 24.9365 108.71 30.069C98.058 35.2212 93.5935 48.045 98.7299 58.7137C98.9453 59.1253 99.1505 59.5172 99.366 59.9287Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_78_1178">
                                    <rect width="164.53" height="144.221" fill="white"
                                        transform="translate(0.151855 77.2158) rotate(-27.6338)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="text-image-price-wrapper">
                    <div class="text-price">
                        <div class="text-price-heading">
                            <?php echo get_field('text'); ?>
                        </div>
                        <span class="before-price"><?php echo get_field('before_price'); ?></span> <span class="price"><?php echo get_field('price'); ?></span><span class="after-price"><?php echo get_field('after_price'); ?></span> <span class="old-price"><?php echo get_field('old_price'); ?></span>
                    </div>
                    <div class="text-omnibus">
                        <?php echo get_field('omnibus'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>