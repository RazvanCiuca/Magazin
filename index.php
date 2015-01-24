<?php
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');   
     
    //require classes
    require_once URL_BASE_ABS.'classes/autor.php';
    require_once URL_BASE_ABS.'classes/category.php';
    require_once URL_BASE_ABS.'classes/item.php';
    
    require_once('menu.php');
    
    //set the local currency
    $smarty->assign('currency', "lei");
    
    
    //assign newest items
    $newest_items = new item();
    $smarty->assign('newest_items', $newest_items->getNewestItems());
    
    //assign popular items
    $popular_items = new item();
    $smarty->assign('popular_items', $popular_items->getPopularItems());
   
    
    //set item image path
    $smarty->assign('item_image_path', URL_BASE.'item_images/');
    
    $smarty->display('index.tpl');
?>
