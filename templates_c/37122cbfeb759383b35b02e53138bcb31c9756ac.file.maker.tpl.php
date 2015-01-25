<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-25 11:04:25
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/maker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54044047154c4bfa9038408-25369829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37122cbfeb759383b35b02e53138bcb31c9756ac' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/maker.tpl',
      1 => 1422180256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54044047154c4bfa9038408-25369829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'maker_name' => 0,
    'items' => 0,
    'URL_BASE' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c4bfa9085f22_63433539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c4bfa9085f22_63433539')) {function content_54c4bfa9085f22_63433539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class='container'>
	<div class="row">
		<div class="page-header"><h2><?php echo $_smarty_tpl->tpl_vars['maker_name']->value;?>
</h2></div>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['name'] = 'sec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
item_images/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
.jpg" width="100" height="125">
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="row">		
						<a href="item.php?item_id=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
">	
							<h4><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_name'];?>
</h4>	
						</a>	
					</div>
					<div class="row">
						by <a tabindex="-1" href="maker.php?maker_id=<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_id'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_name'];?>
 </a>
					</div>
					<div class="row">
						Price: <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									Add to cart!
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								</button>
							</span> 					
						</div>						
					</div>
				</div>
			</div>
		</div>
	<?php endfor; endif; ?>
</div><!-- /.container --> 	






<?php echo $_smarty_tpl->getSubTemplate ('bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
