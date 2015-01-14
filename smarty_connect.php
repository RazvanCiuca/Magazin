<?php
    $project_path = 'Smarty/'; 
    
    require($project_path.'Smarty.class.php');    
    
    $smarty = new Smarty();
    
    $smarty->setTemplateDir(URL_BASE_ABS.'templates');
    $smarty->setCompileDir(URL_BASE_ABS.'templates_c');
    $smarty->setCacheDir(URL_BASE_ABS.'cache');
    $smarty->setConfigDir(URL_BASE_ABS.'configs');
?>