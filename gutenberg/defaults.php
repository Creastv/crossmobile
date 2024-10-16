<?php
// className
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

// Miniaturka sekcji
$blockname = str_replace('acf/', '', $block['name']);
$filepath = get_template_directory_uri() . '/gutenberg/' . $blockname . '/preview.png';
if (!empty($block['data']['preview_image_help'])) {
    echo '
        <figure>
            <img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;" alt="Podgląd sekcji ' . $block['title'] . '">
        </figure>';
    echo '
        <style>
        .' . $className . ' { 
            display:none;
        }
        </style>';
}
