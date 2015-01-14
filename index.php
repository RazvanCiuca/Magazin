<?php
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    require_once URL_BASE_ABS.'classes/Autor.php';
    
    $autori = new autor();
    
    $smarty->assign('autori', $autori->getAutori());
    $smarty->assign('name', 'Ned');
    $smarty->display('index.tpl');

?>