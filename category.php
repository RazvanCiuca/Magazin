<?php
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    
    require_once URL_BASE_ABS.'classes/autor.php';
    require_once URL_BASE_ABS.'classes/category.php';
    require_once('menu.php');
    
    
    $smarty->display('category.tpl');