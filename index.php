<?php    
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');   
     
    //require classes
    require_once('classes.php');    
    
    session_start();
    require_once('menu.php');
    
    
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
