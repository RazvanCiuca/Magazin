<?php
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    
    require_once URL_BASE_ABS.'classes/autor.php';
    require_once URL_BASE_ABS.'classes/category.php';
    require_once URL_BASE_ABS.'classes/item.php';
    
    require_once('menu.php');
    
    //set the local currency
    $smarty->assign('currency', "lei");
    
    //assign items
    $category_id = $_GET['category_id'];
    $items = new item();
    $smarty->assign('items', $items->getItems($category_id));
    
    //assign category name
    $category_name = new category();
    $smarty->assign('category_name', $category_name->getCategory($category_id));
    
    
    $smarty->display('category.tpl');