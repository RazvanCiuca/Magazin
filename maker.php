<?php
    require_once('top.php'); 
    
    
    
    //assign items
    $maker_name = $_GET['maker_name'];
    $maker_name = str_replace('-',' ', $maker_name);
    
    $makers = new maker();
    $maker_id = $makers->idFromName($maker_name);
    
    $items = new item();
    $smarty->assign('items', $items->getItemsByMaker($maker_id));
    
    //assign maker name
//     $maker_name = new maker();
    $smarty->assign('maker_name', $makers->getMakerById($maker_id));
    
    
    $smarty->display('maker.tpl');