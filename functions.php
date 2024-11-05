<?php
// Ajax JSON function
function json($status, $msg = "", $array = [], $array1 = [], $array2 = [])
{
    echo json_encode($array + $array1 + $array2 + ["status" => $status, "msg" => $msg]);
    die();
}

// Skanowanie katalogu functions oraz includowanie pliku z niego
$global_functions = scandir(get_template_directory() . '/functions/');
foreach ($global_functions as $file) {
    if ((!in_array($file, ['.', '..'])) && (!is_dir($file))) {
        require_once('functions/' . $file);
    }
}

// Skanowanie katalogu gutenberga
$gutenberg_functions = scandir(get_template_directory() . '/gutenberg/');
foreach ($gutenberg_functions as $dir) {
    // Sprawdzenie czy katalog jest katalogiem oraz czy posiada co najmniej 3 znaki
    if ((strlen($dir) > 3) && !strpos($dir, ".")) {
        $gutenberg_inner = scandir(get_template_directory() . '/gutenberg/' . $dir . '/');
        if (!empty($gutenberg_inner)) {
            foreach ($gutenberg_inner as $inner) {
                if ($inner == 'functions.php') {
                    // Zaincludowanie pliku functions.php z każdego bloku
                    require_once('gutenberg/' . $dir . '/' . $inner);
                }
            }
        }
    }
}

// Zainicjowanie ACF Blocks Register
require_once('gutenberg/register.php');

// Dodanie możliwości ustawiania miniaturek do stron/wpisów
add_theme_support('post-thumbnails');

// Dodanie możliwości edycji logo w ustawieniach szablonu
add_theme_support('custom-logo');

// Ajax do admina
function adminAjax()
{
    wp_register_script("ajaxadmin", get_bloginfo('template_url') . '/assets/js/ajax/adminAjax.js', array('jquery'));
    wp_localize_script('ajaxadmin', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('jquery');
    wp_enqueue_script('ajaxadmin');
};
add_action('admin_enqueue_scripts', 'adminAjax');


// remove wpcf7 p
add_filter('wpcf7_autop_or_not', '__return_false');


// register menu
register_nav_menus(array(
    'primary' => __('Menu Główne', 'kamil-theme'),
    'footer' => __('Menu Stopka', 'kamil-theme'),
    'privacy' => __('Menu stopka (małe)', 'kamil-theme'),
));

/**
 *  CRM FORM CUSTOMIZATION
 */
function crm_form_custom_script_enqueue()
{
    wp_enqueue_script('crm-forms-script', get_stylesheet_directory_uri() . '/js/crm-forms.js');
    wp_enqueue_script('b24-postcode-script', get_stylesheet_directory_uri() . '/js/b24-form-postalcode.js');
}
add_action('wp_enqueue_scripts', 'crm_form_custom_script_enqueue');

function crm_form_custom_styles_enqueue()
{
    wp_enqueue_style('bitrix-form', get_stylesheet_directory_uri() . '/css/b24-form.css');
}
add_action('wp_enqueue_scripts', 'crm_form_custom_styles_enqueue');
/**
 *  CRM FORM DATE FIELD
 */

function fetch_data_from_bitrix()
{
    $all_data = [];
    $has_more_data = true;
    $next = null;
    $last_item_id = 0;

    // Calculate date range
    $currentDate = date('d.m.Y');
    $twoYearsAhead = date('d.m.Y', strtotime('+2 years'));

    while ($has_more_data) {
        $api_url = 'https://crossmobile.bitrix24.pl/rest/27/58wldo4yx1j4q06k/lists.element.get';

        $body_data = [
            'IBLOCK_TYPE_ID' => "lists",
            'IBLOCK_ID' => 33,
            'FILTER' => ['>=PROPERTY_105' => $currentDate, '<=PROPERTY_105' => $twoYearsAhead, ">ID" => $last_item_id]
        ];

        $response = wp_remote_post($api_url, [
            'body' => json_encode($body_data),
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'method' => 'POST',
            'data_format' => 'body'
        ]);

        if (is_wp_error($response)) {
            error_log('Error fetching data from Bitrix24: ' . $response->get_error_message());
            break;
        }

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        if (isset($data['result']) && !empty($data['result'])) {
            $last_item = end($data['result']);
            $last_item_id = isset($last_item['ID']) ? $last_item['ID'] : null;
            $all_data = array_merge($all_data, $data['result']);
        } else {
            $has_more_data = false;
        }

        $has_more_data = isset($data['next']) ? true : false;
    }

    return $all_data;
}


function add_custom_styles_to_head()
{
    if (is_page('przenies-numer')) {
        $bitrix_data = fetch_data_from_bitrix();

        $output = '';

        if (is_array($bitrix_data)) {
            $output .= '<style>';
            foreach ($bitrix_data as $item) {
                if (isset($item["PROPERTY_105"]) && is_array($item["PROPERTY_105"])) {
                    foreach ($item["PROPERTY_105"] as $key => $value) {
                        if ($value) {
                            $date = DateTime::createFromFormat("d.m.Y", $value);
                            if ($date) {
                                $formattedDate = $date->format("Y-n-j"); // Format date without leading zeros
                                $output .= 'table tr td[data-id="' . $formattedDate . '"]{ pointer-events: none; }';
                            }
                            break;
                        }
                    }
                }
            }
            $output .= '</style>';

            echo $output;
        }
    }
}
add_action('wp_head', 'add_custom_styles_to_head');



/*
CHANGE SLUGS OF CUSTOM POST TYPES
*/

function change_post_types_slug($args, $post_type)
{
    if ('offer' === $post_type) {
        $args['rewrite']['slug'] = 'oferta';
    }
    return $args;
}
add_filter('register_post_type_args', 'change_post_types_slug', 10, 2);
