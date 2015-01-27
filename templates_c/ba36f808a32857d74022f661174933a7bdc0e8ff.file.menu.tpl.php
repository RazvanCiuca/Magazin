<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 15:39:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36896697554b6a671eb6aa2-74893049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba36f808a32857d74022f661174933a7bdc0e8ff' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/menu.tpl',
      1 => 1422369582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36896697554b6a671eb6aa2-74893049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b6a671eb92d3_38761440',
  'variables' => 
  array (
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6a671eb92d3_38761440')) {function content_54b6a671eb92d3_38761440($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class='row'>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
	 			 </button>
	 			 <a class="navbar-brand list-inline" href="index.php">Shop</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					
					<li class="dropdown">	
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
							    Categories
								<span class="caret"></span>
							</button>					
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['name'] = 'sec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['total']);
?>
								<li><a tabindex="-1" href="category.php?category_id=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['category_name'];?>
</a></li>
								<?php endfor; endif; ?>
							</ul>
						</div>
					</li>
					<li>
						<p class="navbar-text"><a href='cart.php'>Cart</a></p>
					</li>
					<!-- SEARCH -->
					<form class="navbar-form navbar-left" action="search.php" method="GET">
						<div class="form-group">
							<input type="text" class="form-control input-sm" placeholder="Search" name="keyword'>
						</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</form>
					
					
					
					
					<!-- <li><a href="#contact">Contact</a></li> -->
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</nav><?php }} ?>
