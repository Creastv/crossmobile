<?php
$className = 'text-image';
require dirname(__FILE__, 2) . '/defaults.php';

if (!empty(get_field('direction'))) {
    $className .= ' block-reverse ';
}
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="text-image-wrapper">
            <?php if (!empty(get_field('image'))) { ?>
                <div class="image-wrapper">
                    <?php echo wp_get_attachment_image(get_field('image')['ID'], 'medium_large', 0, ['class' => '']); ?>
                    <div class="image-logo">
                        <svg width="235" height="220" viewBox="0 0 235 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_322_10934)">
                                <path d="M183.478 88.2085C189.613 125.751 164.147 161.139 126.652 167.255C105.484 170.704 83.9125 164.1 68.307 149.367C62.1309 143.546 57.0824 136.636 53.4021 128.971L25.0934 137.842C47.369 186.793 105.097 208.439 154.012 186.17C194.601 167.708 217.45 123.968 209.434 80.0746L183.478 88.2085Z" fill="#E81F76"></path>
                                <path d="M88.0454 58.727L66.7953 65.3862L60.9394 46.6996C55.1374 46.5854 49.3595 47.4162 43.8117 49.1548L50.4753 70.4188L31.8753 76.2476C31.7385 82.0605 32.5711 87.8418 34.3107 93.3932L55.5608 86.734L61.4711 105.594C67.2731 105.708 73.051 104.877 78.5988 103.139L71.943 81.8996L90.543 76.0709C90.655 70.2658 89.8224 64.4845 88.0828 58.933C88.0828 58.933 88.0702 58.7192 88.0206 58.7347L88.0454 58.727Z" fill="#E81F76"></path>
                                <path class="fill-dot" d="M174.391 40.8952C181.165 58.2598 172.589 77.849 155.204 84.6035C137.851 91.375 118.269 82.7871 111.512 65.39C110.955 63.9589 110.496 62.4966 110.137 61.0034C103.371 43.6637 111.955 24.0991 129.332 17.3199C146.685 10.5484 166.266 19.1363 173.024 36.5334C173.581 37.9646 174.039 39.4268 174.399 40.92L174.391 40.8952ZM118.244 58.4902C121.978 71.8812 135.859 79.7243 149.25 76.0181C162.632 72.2871 170.466 58.4011 166.756 45.0023C166.593 44.4819 166.43 43.9614 166.275 43.4657C162.541 30.0748 148.659 22.2316 135.269 25.9378C121.887 29.6688 114.053 43.5549 117.762 56.9536C117.925 57.4741 118.081 57.9698 118.244 58.4902Z" fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_322_10934">
                                    <rect width="193.18" height="169.335" fill="white" transform="translate(0 57.7676) rotate(-17.3996)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            <?php }; ?>
            <div class="text-wrapper">
                <?php if (!empty(get_field('title'))) { ?>
                    <h2 class="h1">
                        <?php echo get_field('title'); ?>
                    </h2>
                <?php }; ?>
                <?php echo get_field('text'); ?>
            </div>
        </div>
    </div>
</section>