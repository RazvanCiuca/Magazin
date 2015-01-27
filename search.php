<?php
    session_start();
    require_once('config.php');
    require_once('connect.php');
    require_once('smarty_connect.php');
    
    require_once('classes.php');
    
    require_once('menu.php');
    
    $cuvant=$_GET['cuvant'];
    
    
    
    $smarty->display('search.tpl');