<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-25 11:02:23
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159228614354b41de3257954-78834335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd63abc93c6f9a01b026565bd1f01d120d0e23d3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/top.tpl',
      1 => 1422180075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159228614354b41de3257954-78834335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b41de325c3e5_60786398',
  'variables' => 
  array (
    'titlu' => 0,
    'URL_BASE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b41de325c3e5_60786398')) {function content_54b41de325c3e5_60786398($_smarty_tpl) {?><html>
  <head>
 	<meta charset="utf-8">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titlu']->value)===null||$tmp==='' ? 'n-avem bre' : $tmp);?>
</title>
   
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
   
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['URL_BASE']->value;?>
css/bootstrap.css" rel="stylesheet">
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['URL_BASE']->value;?>
css/magazin.css" rel="stylesheet">
    
    <!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	
	<!-- Latest compiled and minified JavaScript -->
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	    
	    
  </head>
  	
  <body>
  
  <?php }} ?>
