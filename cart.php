<?php    
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    
    require_once('classes.php');
    session_start();
    require_once('menu.php');
    
    
    if(isset($_GET['action']) && $_GET['action']=='add') {
      
      $_SESSION['cart']->addItem($_POST['item_id'], 1, $_POST['price'], $_POST['item_name']);
      
    }
    if(isset($_GET['action']) && $_GET['action']=='update') {
      
      $_SESSION['cart']->updateItem($_GET['item_id'], $_GET['qty']);
      
    }
    
    $cart_contents = $_SESSION['cart']->getCartContents();
    
    
    
    $smarty->assign('total', $_SESSION['cart']->getTotalPrice());
    $smarty->assign('options', [1,2,3,4,5,6]);
    $smarty->assign('cart_contents', $cart_contents);
    $smarty->display('cart.tpl');