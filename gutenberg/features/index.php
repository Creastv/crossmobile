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
                    <?php if ($offer['link']) { ?>
                        <a href="<?php echo $offer['link']['url']; ?>" class="single-offer">
                        <?php } else { ?>
                            <div class="single-offer">
                            <?php } ?>

                            <div class="offer-icon">
                                <?php echo wp_get_attachment_image($offer['icon']['ID'], '', 0, ['class' => '']); ?>
                            </div>
                            <?php echo $offer['description']; ?>

                            <?php if ($offer['link']) { ?>
                        </a>
                    <?php } else { ?>
            </div>
        <?php } ?>
    <?php }; ?>
    </div>
<?php }; ?>
</div>
</section>