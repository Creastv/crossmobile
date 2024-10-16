<?php
$className = 'features';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <?php if (!empty(get_field('title'))) { ?>
            <div class="features-title">
                <h2>
                    <?php echo get_field('title'); ?>
                </h2>
            </div>
        <?php }; ?>
        <?php if (!empty(get_field('features'))) { ?>
            <div class="features-wrapper">
                <?php foreach (get_field('features') as $offer) { ?>
                    <div class="single-offer">
                        <div class="offer-icon">
                            <?php echo wp_get_attachment_image($offer['icon']['ID'], '', 0, ['class' => '']); ?>
                        </div>
                        <?php echo $offer['description']; ?>
                    </div>
                <?php }; ?>
            </div>
        <?php }; ?>
    </div>
</section>