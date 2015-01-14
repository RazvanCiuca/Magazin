<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-12 20:17:55
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86754789454b3fe35526c65-29728170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '742251b83fdcc29ce2892cfa53b709f00c32756f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/index.tpl',
      1 => 1421090267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86754789454b3fe35526c65-29728170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b3fe3557b0a1_20256786',
  'variables' => 
  array (
    'autori' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3fe3557b0a1_20256786')) {function content_54b3fe3557b0a1_20256786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/Applications/XAMPP/xamppfiles/htdocs/magazin/Smarty/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  	<?php echo smarty_function_html_options(array('name'=>'autori','options'=>$_smarty_tpl->tpl_vars['autori']->value),$_smarty_tpl);?>

    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
  </body>
</html><?php }} ?>
