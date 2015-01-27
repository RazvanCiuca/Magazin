<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 15:56:41
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121461890454c4e02964d475-52674066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d001d270c2062af7bb0a37063c1403d0c00c655' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/cart.tpl',
      1 => 1422370597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121461890454c4e02964d475-52674066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c4e02967a8d9_18847809',
  'variables' => 
  array (
    'cart_contents' => 0,
    'options' => 0,
    'currency' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c4e02967a8d9_18847809')) {function content_54c4e02967a8d9_18847809($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class='container'>
	<div class="row">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Quantity</th>
					<th>Item Name</th>				
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['name'] = 'sec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cart_contents']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr>
						<td class="col-sm-1 col-md-1 col-lg-1">								
							<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
								<?php echo $_smarty_tpl->tpl_vars['cart_contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['qty'];?>
 <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="cart.php?action=remove">0</a></li>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['options']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
									<li>
										<a href="cart.php?action=update&qty=<?php echo $_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
&item_id=<?php echo $_smarty_tpl->tpl_vars['cart_contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
">
											<?php echo $_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>

										</a>
									</li>
								<?php endfor; endif; ?>							
							</ul>
						</div>
					</td>
						<td><?php echo $_smarty_tpl->tpl_vars['cart_contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['cart_contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</td>
					</tr>
				<?php endfor; endif; ?>
				<tr>
					<td></td><td></td><th>Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</th>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
