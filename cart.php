<?php
    require_once('top.php'); 
    
    
    if(isset($_GET['action']) && $_GET['action']=='add') {
      
      $cart->addItem($_POST['item_id'], 1, $_POST['price'], $_POST['item_name']);
      
    }
    if(isset($_GET['action']) && $_GET['action']=='update') {
      
      $cart->updateItem($_GET['item_id'], $_GET['qty']);
      
    }
    
    $cart_contents = $cart->getCartContents();
    
    
    
    $smarty->assign('total', $cart->getTotalPrice());
    $smarty->assign('options', [1,2,3,4,5,6]);
    $smarty->assign('cart_contents', $cart_contents);
    $smarty->display('cart.tpl');