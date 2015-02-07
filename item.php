<?php
    require_once('top.php'); 
    
    //assign item info
    $item = new item();
    $item_id=$_GET['item_id'];
    $smarty->assign('item', $item->getItem($item_id));
    //assign reviews
    $reviews = new item();
    $smarty->assign('reviews', $reviews->getItemReviews($item_id));

    $smarty->display('item.tpl');
   