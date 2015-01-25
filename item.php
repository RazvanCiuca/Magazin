<?php
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    
    //require classes
    require_once URL_BASE_ABS.'classes/maker.class.php';
    require_once URL_BASE_ABS.'classes/category.class.php';
    require_once URL_BASE_ABS.'classes/item.class.php';
    
    require_once('menu.php');
    
    //assign item info
    $item = new item();
    $item_id=$_GET['item_id'];
    $smarty->assign('item', $item->getItem($item_id));
    
    //assign reviews
    $reviews = new item();
    $smarty->assign('reviews', $reviews->getItemReviews($item_id));

    $smarty->display('item.tpl');