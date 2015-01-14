<?php
    //path
    define('URL_BASE_ABS', $_SERVER['DOCUMENT_ROOT'].'/magazin/');
    define('URL_BASE', 'http://'.$_SERVER['HTTP_HOST'].'/magazin/');
    
//     function __autoload($class_name) {
//         print URL_BASE_ABS.'classes/'.$class_name.'.php';
//         require_once URL_BASE_ABS.'classes/'.$class_name.'.php';
//     }
    
//     function __autoload($name) {
        
//         echo "Want to load $name.\n";
//         include URL_BASE_ABS.'classes/'.$name.'.php';
//         throw new MissingException("Unable to load $name.");
//     }
    
    