<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-01 13:49:04
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11501571354c8f4144020b7-62055975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3d1aa333e01853900b86b06309d2975a86d514' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/search.tpl',
      1 => 1422794937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11501571354c8f4144020b7-62055975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c8f4144488d9_04819552',
  'variables' => 
  array (
    'search_results' => 0,
    'URL_BASE' => 0,
    'items' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8f4144488d9_04819552')) {function content_54c8f4144488d9_04819552($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<br><br><br><br>

<div class='container'>
	<div class="row">
		<div class="page-header"><h2>Results</h2></div>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['name'] = 'sec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['search_results']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<div class="well">
			<div class="row">
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div class="row">
						<img src="<?php echo $_smarty_tpl->tpl_vars['URL_BASE']->value;?>
item_images/<?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
.jpg" width="100" height="125">
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="row">		
						<a href="item.php?item_id=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
">	
							<h4><?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_name'];?>
</h4>	
						</a>	
					</div>
					<div class="row">
						by <a tabindex="-1" href="maker.php?maker_id=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_id'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_name'];?>
 </a>
					</div>
					<div class="row">
						Price: <?php echo $_smarty_tpl->tpl_vars['search_results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

						<form action="cart.php?action=add" method="POST">
							<div class="input-group">
								<input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
">
								<input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_name'];?>
">
								<input type="hidden" name="maker_name" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_name'];?>
">
								<input type="hidden" name="price" value="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['price'];?>
">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button submit">
										Add to cart! <span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</span>
							</div>
						</form>
				</div>
				</div>
			</div>
		</div>
	<?php endfor; endif; ?>
</div><!-- /.container --> 





<?php echo $_smarty_tpl->getSubTemplate ('bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
