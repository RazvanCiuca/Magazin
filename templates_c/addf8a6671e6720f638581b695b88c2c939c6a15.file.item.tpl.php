<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-27 15:38:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135372153954c3eefaa2c9e9-34604640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addf8a6671e6720f638581b695b88c2c939c6a15' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/item.tpl',
      1 => 1422369496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135372153954c3eefaa2c9e9-34604640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c3eefaa5fb87_72840610',
  'variables' => 
  array (
    'URL_BASE' => 0,
    'item' => 0,
    'currency' => 0,
    'reviews' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c3eefaa5fb87_72840610')) {function content_54c3eefaa5fb87_72840610($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class='container'>
	<div class="row" style="min-height:175px;">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<div class="row">
				<div>
					<img src="<?php echo $_smarty_tpl->tpl_vars['URL_BASE']->value;?>
item_images/<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
.jpg" width="150" height="200">
				</div>
			</div>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			<div class="row">				
				<h2><?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
</h2>	
			</div>
			<div class="row">
				by <a tabindex="-1" href="maker.php?maker_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['maker_id'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['maker_name'];?>
 </a>
			</div>
			<div class="row">
				<h4><i><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</i></h4>
			</div>
			<div class="row">
				Price: <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

				<form action="cart.php?action=add" method="POST">
					<div class="input-group">				
						<input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
">
						<input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item_name'];?>
">
						<input type="hidden" name="maker_name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['maker_name'];?>
">
						<input type="hidden" name="price" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button submit">								
								Add to cart!
								<span class="glyphicon glyphicon-shopping-cart"></span>
							</button>
						</span> 					
					</div>	
				</form>					
			</div>
		</div>
	</div>
</div><!-- /.container --> 	
<br><br>
<div class='container'>
	<div class="well">
		<h4>Reviews:</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['name'] = 'sec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['reviews']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<div class="media">
				<div class="media-left">
					<span class="medio-object glyphicon glyphicon-user" style="font-size:3em"></span>
				</div>
				<div class="media-body">
					<b><?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['user_name'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['review'];?>

				</div>
			</div>
		<?php endfor; endif; ?>
	</div><!-- /.well -->
</div><!-- /.container --> 

<?php echo $_smarty_tpl->getSubTemplate ('bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
