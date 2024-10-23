<?php 
//funkcja do fpc
function fpc($var){
    file_put_contents('test.txt',"=== $ ===\n".print_r($var ,true)."\n",FILE_APPEND);
}

//funkcja do printowania
function p($var){
    if(current_user_can('administrator')) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}
?>