<?php
acf_register_block_type(array(
    'name'              => 'blog-posts',
    'title'             => __('Blog posts'),
    'description'       => __('blog-posts'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/blog-posts/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/blog-posts/style.css',
    'enqueue_assets'    => 'blog_posts_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/blog-posts/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'contact-data',
    'title'             => __('Dane kontaktowe'),
    'description'       => __('contact-data'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/contact-data/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/contact-data/style.css',
    'enqueue_assets'    => 'contact_data_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/contact-data/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'contact-form',
    'title'             => __('Formularz kontaktowy'),
    'description'       => __('contact-form'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/contact-form/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/contact-form/style.css',
    'enqueue_assets'    => 'contact_form_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/contact-form/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'downloads',
    'title'             => __('Dokumenty do pobrania'),
    'description'       => __('downloads'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/downloads/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/downloads/style.css',
    'enqueue_assets'    => 'downloads_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/downloads/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
function downloads_assets()
{
    wp_enqueue_script('downloads-script-0', get_template_directory_uri() . '/gutenberg/downloads/script.js', array(), '', true);
};
acf_register_block_type(array(
    'name'              => 'faq',
    'title'             => __('FAQ'),
    'description'       => __('faq'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/faq/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/faq/style.css',
    'enqueue_assets'    => 'faq_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/faq/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
function faq_assets()
{
    wp_enqueue_script('faq-script-0', get_template_directory_uri() . '/gutenberg/faq/script.js', array(), '', true);
};
acf_register_block_type(array(
    'name'              => 'features',
    'title'             => __('Features'),
    'description'       => __('features'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/features/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/features/style.css',
    'enqueue_assets'    => 'features_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/features/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'features-2',
    'title'             => __('Features 2'),
    'description'       => __('features-2'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/features-2/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/features-2/style.css',
    'enqueue_assets'    => 'features_2_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/features-2/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
function features_2_assets()
{
    wp_enqueue_script('features-2-script-0', get_template_directory_uri() . '/gutenberg/features-2/script.js', array(), '', true);
};
acf_register_block_type(array(
    'name'              => 'form-horizontal',
    'title'             => __('CTA z formularzem (poziomym)'),
    'description'       => __('form-horizontal'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/form-horizontal/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/form-horizontal/style.css',
    'enqueue_assets'    => 'form_horizontal_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/form-horizontal/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => __('Hero'),
    'description'       => __('hero'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/hero/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/hero/style.css',
    'enqueue_assets'    => 'hero_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/hero/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'iframe-map',
    'title'             => __('Mapa'),
    'description'       => __('iframe-map'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/iframe-map/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/iframe-map/style.css',
    'enqueue_assets'    => 'iframe_map_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/iframe-map/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'offer-boxes',
    'title'             => __('Offer boxes'),
    'description'       => __('offer-boxes'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/offer-boxes/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/offer-boxes/style.css',
    'enqueue_assets'    => 'offer_boxes_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/offer-boxes/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
function offer_boxes_assets()
{
    wp_enqueue_script('offer-boxes-script-0', get_template_directory_uri() . '/gutenberg/offer-boxes/script.js', array(), '', true);
    wp_enqueue_style('offer-boxes',  get_template_directory_uri() . '/gutenberg/offer-boxes/style.css', array(), '1.3', true);
};
acf_register_block_type(array(
    'name'              => 'offer-horizontal-images',
    'title'             => __('Offer horizontal images'),
    'description'       => __('offer-horizontal-images'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/offer-horizontal-images/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/offer-horizontal-images/style.css',
    'enqueue_assets'    => 'offer_horizontal_images_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/offer-horizontal-images/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'offer-links',
    'title'             => __('Offer links'),
    'description'       => __('offer-links'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/offer-links/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/offer-links/style.css',
    'enqueue_assets'    => 'offer_links_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/offer-links/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'offer-wide-images',
    'title'             => __('Offer wide images'),
    'description'       => __('offer-wide-images'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/offer-wide-images/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/offer-wide-images/style.css',
    'enqueue_assets'    => 'offer_wide_images_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/offer-wide-images/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'rich-text',
    'title'             => __('Rich text'),
    'description'       => __('rich-text'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/rich-text/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/rich-text/style.css',
    'enqueue_assets'    => 'rich_text_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/rich-text/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'text-btn',
    'title'             => __('Text and button'),
    'description'       => __('text-btn'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/text-btn/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/text-btn/style.css',
    'enqueue_assets'    => 'text_btn_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/text-btn/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'text-image',
    'title'             => __('Text and image'),
    'description'       => __('text-image'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/text-image/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/text-image/style.css',
    'enqueue_assets'    => 'text_image_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/text-image/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'text-image-features',
    'title'             => __('Text image and features'),
    'description'       => __('text-image-features'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/text-image-features/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/text-image-features/style.css',
    'enqueue_assets'    => 'text_image_features_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/text-image-features/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
acf_register_block_type(array(
    'name'              => 'topup-boxes',
    'title'             => __('Doładowania'),
    'description'       => __('topup-boxes'),
    'category'          => 'kamil-theme',
    'icon'              => 'media-text',
    'render_template'   => 'gutenberg/topup-boxes/index.php',
    'enqueue_style'     => get_template_directory_uri() . '/gutenberg/topup-boxes/style.css',
    'enqueue_assets'    => 'topup_boxes_assets',
    'example'  => array(
        'attributes' => array(
            'mode' => 'preview',
            'data' => array(
                'preview_image_help' => get_template_directory_uri() . '/gutenberg/topup-boxes/preview.png',
            )
        )
    ),
    'mode' => 'preview',
    'supports' => array(
        'align' => false,
        'mode' => true,
    ),
));
function topup_boxes_assets()
{
    wp_enqueue_script('topup-boxes-script-0', get_template_directory_uri() . '/gutenberg/topup-boxes/script.js', array(), '', true);
};


// add_action('wp_enqueue_scripts', 'register_acf_block_styles');
// add_action('admin_enqueue_scripts', 'register_acf_block_styles');

// function register_acf_block_styles()
// {
//     if (has_block('acf/offer-boxes')) {
//         wp_enqueue_style('offer-boxess',  get_template_directory_uri() . '/gutenberg/offer-boxes/style.css', array(), '1.3', false);
//     }
//     if (has_block('acf/hero')) {
//         wp_enqueue_style('hero',  get_template_directory_uri() . '/gutenberg/hero/style.css', array(), '1.1', false);
//     }
//     if (has_block('acf/offer-horizontal-images')) {
//         wp_enqueue_style('offer-horizontal-images',  get_template_directory_uri() . '/gutenberg/offer-horizontal-images/style.css', array(), '1.2', false);
//     }

//     if (has_block('acf/offer-wide-images')) {
//         wp_enqueue_style('offer-wide-images',  get_template_directory_uri() . '/gutenberg/offer-wide-images/style.css', array(), '1.3', false);
//         // wp_enqueue_script('offer-boxes-script-0', get_template_directory_uri() . '/gutenberg/offer-boxes/script.js', array(), '', true);
//     }
// }
