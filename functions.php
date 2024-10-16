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