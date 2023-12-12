<?php  //simplifica chamada de classes

if(!function_exists('pre')){
    function pre($data){
        echo '<pre>';
        var_dump($data); //print_r
        echo '</pre><hr>';
    }
}