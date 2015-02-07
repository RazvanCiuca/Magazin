<?php
    require_once('top.php'); 
    
    //assign items
    $category_name = $_GET['category_name'];
    
    $categories = new Category();
    $category_id = $categories->idFromName($category_name);
    
    $items = new item();
    $smarty->assign('items', $items->getItemsByCategory($category_id));
    
    //assign category name
    $category_name = new category();
    $smarty->assign('category_name', $category_name->getCategory($category_id));
    
    
    $smarty->display('category.tpl');
