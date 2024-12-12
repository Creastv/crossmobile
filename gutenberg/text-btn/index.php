<?php
$className = 'text-btn';
require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container container-sm">
        <div class="text-btn-wrapper">
            <?php echo get_field('text'); ?>
            <?php if (!empty(get_field('btn'))) { ?>
                <div class="btn-wrapper">
                    <a href="<?php echo get_field('btn')['url'] ? get_field('btn')['url'] : '#'; ?>"
                        title="<?php echo get_field('btn')['title'] ? get_field('btn')['title'] : ''; ?>"
                        target="<?php echo get_field('btn')['target'] ? get_field('btn')['target'] : '_self'; ?>"
                        class="btn btn-primary">
                        <?php echo get_field('btn')['title'] ? get_field('btn')['title'] : ''; ?>
                    </a>
                </div>
            <?php }; ?>
        </div>
    </div>
</section>