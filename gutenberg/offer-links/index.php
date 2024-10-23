<?php
$className = 'offer-links';
require dirname(__FILE__, 2) . '/defaults.php';
?>
<?php if (!empty(get_field('offers'))) { ?>
    <section class="<?php echo esc_attr($className); ?>">
        <div class="container">
            <div class="offer-links-wrapper">
                <?php foreach (get_field('offers') as $offer) { ?>
                    <?php if (!empty($offer['link'])) { ?>
                        <a href="<?php echo $offer['link']; ?>" class="single-offer <?php if (!empty($offer['related'])) echo 'related'; ?>">
                            <div class="offer-icon">
                                <?php echo wp_get_attachment_image($offer['icon']['ID'], '', 0, ['class' => '']); ?>
                            </div>
                            <div>
                                <h4>
                                    <?php echo $offer['title']; ?>
                                </h4>
                                <?php echo $offer['description']; ?>
                            </div>
                        </a>
                    <?php } else { ?>
                        <div class="single-offer <?php if (!empty($offer['related'])) echo 'related'; ?>">
                            <div class="offer-icon">
                                <?php echo wp_get_attachment_image($offer['icon']['ID'], '', 0, ['class' => '']); ?>
                            </div>
                            <div>
                                <h4>
                                    <?php echo $offer['title']; ?>
                                </h4>
                                <?php echo $offer['description']; ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php }; ?>
            </div>
        </div>
    </section>
<?php }; ?>