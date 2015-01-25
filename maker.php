<?php
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    
    require_once URL_BASE_ABS.'classes/maker.class.php';
    require_once URL_BASE_ABS.'classes/category.class.php';
    require_once URL_BASE_ABS.'classes/item.class.php';
    
    require_once('menu.php');
    
    
    
    //assign items
    $maker_id = $_GET['maker_id'];
    $items = new item();
    $smarty->assign('items', $items->getItemsByMaker($maker_id));
    
    //assign maker name
    $maker_name = new maker();
    $smarty->assign('maker_name', $maker_name->getMakerById($maker_id));
    
    
    $smarty->display('maker.tpl');