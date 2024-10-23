<?php

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init(){

    // Category register: kamil-theme
    function kamil_theme_block_category($categories, $post){
        return array_merge(
            $categories,
            array(
                array(
                    'slug' => 'kamil-theme',
                    'title' => 'Kamil theme',
                ),
            )
        );
    }
    add_filter('block_categories_all', 'kamil_theme_block_category', 10, 2);


    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        require_once('register-sections.php');

    }
}
