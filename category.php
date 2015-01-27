<?php
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    
    require_once('classes.php');
    
    session_start();
    
    require_once('menu.php');
    
    
    
    //assign items
    $category_id = $_GET['category_id'];
    $items = new item();
    $smarty->assign('items', $items->getItemsByCategory($category_id));
    
    //assign category name
    $category_name = new category();
    $smarty->assign('category_name', $category_name->getCategory($category_id));
    
    
    $smarty->display('category.tpl');