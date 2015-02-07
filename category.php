<?php
    require_once('top.php'); 
    
    //assign items
    $category_name = $_GET['category_name'];
    
    $categories = new Category();
//     print('<br><br><br><br>-------debug');
    $category_id = $categories->idFromName($category_name);
    $categories->findParents($category_id);
//     print_r($categories->parents);
    
    $items = new item();
    $smarty->assign('items', $items->getItemsByCategory($category_id));
    
    //assign category name
    $category_name = new category();
    $smarty->assign('category_name', $category_name->getCategory($category_id));
    
    
    $smarty->display('category.tpl');
