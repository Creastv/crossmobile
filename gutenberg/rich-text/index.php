<?php
$className = 'rich-text';
require dirname(__FILE__, 2) . '/defaults.php';
if (!empty(get_field('width'))) {
    $className .= ' ' . get_field('width') . ' ';
}
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="rich-text-wrapper">
            <div class="additional-wrapper">
                <?php echo get_field('text'); ?>
            </div>
        </div>
    </div>
</section>