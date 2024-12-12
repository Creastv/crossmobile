<?php
$opis = get_field('opis');
$img = get_field('zdjecie');
$kroki = get_field('kroki');
$link = get_field('link');

if ($link):
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$className = 'pn-steps';

require dirname(__FILE__, 2) . '/defaults.php';
?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="col col-left">
            <?php if ($opis) : ?>
                <?php echo $opis; ?>
            <?php endif; ?>
            <?php if ($img) : ?>
                <?php echo wp_get_attachment_image($img, 'full'); ?>
            <?php endif; ?>
            <span class="border-top"></span>
            <span class="border-left"></span>
        </div>
        <div class="col col-right">
            <?php if ($kroki) :
                $i = 1;
            ?>
                <ul>
                    <?php foreach ($kroki as $krok) : ?>
                        <li>
                            <span><?php echo $i; ?></span>
                            <div class="info">
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($krok['ikona'], 'full'); ?>
                                </div>
                                <h3 class="h4"><?php echo $krok['tytul']; ?></h3>
                            </div>
                        </li>
                    <?php $i++;
                    endforeach; ?>
                    <?php if ($link) : ?>
                        <li class="li-btn">
                            <a class="offer-link" href="<?php echo esc_url($link_url); ?>"
                                target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>

    </div>
</section>