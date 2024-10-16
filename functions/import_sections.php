<?php
// Automatyczne rejestrowanie modułów
function includeModules(){
    $modules = scandir(get_template_directory() . '/gutenberg/');
    $i = 0;
    foreach($modules as $catalog){
        if($catalog != 'images'){
            $content = '';
            $moduleName = '';
            $moduleCategory = '';
            $moduleIcon = '';
            $moduleEnable = 'true';
            $moduleMode = 'preview';
            $moduleScripts = '';
            $catalogSlug = str_replace("-", "_", $catalog);

            if($i == 0){
                $i++;
                file_put_contents(get_template_directory().'/gutenberg/register-sections.php', '<?php');
            }
            if((!in_array($file,['.','..'])) && (!is_dir($catalog))){


                if( file_exists(get_template_directory() . '/gutenberg/'.$catalog.'/config.php')){

                }
                if( file_exists(get_template_directory() . '/gutenberg/'.$catalog.'/config.php')){
                    require(get_template_directory() . '/gutenberg/'.$catalog.'/config.php');
                    $moduleName = $attributes['name'];
                    $moduleCategory = $attributes['category'];
                    $moduleIcon = $attributes['icon'];
                    $moduleMode = $attributes['moduleMode'];
                    $moduleEnable = $attributes['mode'];
                    $moduleScripts = $attributes['js'];
                }

                if($moduleName && $moduleName != ''){
                    $content = '
                    acf_register_block_type(array(
                        \'name\'              => \''.$catalog.'\',
                        \'title\'             => __(\''.$moduleName.'\'),
                        \'description\'       => __(\''.$catalog.'\'),
                        \'category\'          => \''.$moduleCategory.'\',
                        \'icon\'              => \''.$moduleIcon.'\',
                        \'render_template\'   => \'gutenberg/'.$catalog.'/index.php\',
                        \'enqueue_style\'     => get_template_directory_uri() . \'/gutenberg/'.$catalog.'/style.css\',
                        \'enqueue_assets\'    => \''.$catalogSlug.'_assets\',
                        \'example\'  => array(
                            \'attributes\' => array(
                                \'mode\' => \'preview\',
                                \'data\' => array(
                                    \'preview_image_help\' => get_template_directory_uri() . \'/gutenberg/'.$catalog.'/preview.png\',
                                )
                            )
                        ),
                        \'mode\' => \''.$moduleMode.'\',
                        \'supports\' => array(
                            \'align\' => false,
                            \'mode\' => '.$moduleEnable.',
                        ),
                    ));';
                    if($moduleScripts && is_array($moduleScripts)){
                        $content .='
                        function '.$catalogSlug.'_assets() {';
                            $i = 0;
                            foreach($moduleScripts as $script){
                                $content .='
                                wp_enqueue_script(\''.$catalog.'-script-'.$i.'\', get_template_directory_uri() . \'/gutenberg/'.$catalog.'/'.$script.'\', array(), \'\', true );';
                                $i++;
                            }
                        $content .='
                        };';
                    }        
                }
            }
            file_put_contents(get_template_directory().'/gutenberg/register-sections.php', $content,FILE_APPEND);
        }
    }
    json(200, 'msg');
}
add_action("wp_ajax_includeModules", "includeModules");
add_action("wp_ajax_nopriv_includeModules", "includeModules");

function custom_menu() { 
    add_menu_page( 
        'Import sekcji', 
        'Import sekcji', 
        'edit_posts', 
        'import_sekcji', 
        'display_import_page', 
        'dashicons-media-spreadsheet' 
       );
  }

add_action('admin_menu', 'custom_menu');
function display_import_page(){
    echo '
    <div class="import-section-wrapper">
        <h2>Poniższy przycisk pozwala na zaimportowanie (odświeżenie) nowych sekcji z katalogu Gutenberg</h2>
        <p>Proces importowania sekcji z Advanced Custom Fields (ACF) do Gutenberg odbywa się po kliknięciu przycisk import, po użyciu przycisku wykona sie pełny import sekcji.</p>
        <button type="button" id="start-import-sections">Zaimportuj</button>
    </div>';
}
