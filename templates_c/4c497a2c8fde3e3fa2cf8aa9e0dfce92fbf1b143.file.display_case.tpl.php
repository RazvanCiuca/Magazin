<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-24 23:08:11
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/display_case.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108098683254c3dec23b9995-96816122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c497a2c8fde3e3fa2cf8aa9e0dfce92fbf1b143' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/magazin/templates/display_case.tpl',
      1 => 1422137288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108098683254c3dec23b9995-96816122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c3dec23cede5_18633690',
  'variables' => 
  array (
    'newest_items' => 0,
    'item_image_path' => 0,
    'currency' => 0,
    'popular_items' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c3dec23cede5_18633690')) {function content_54c3dec23cede5_18633690($_smarty_tpl) {?><div class="container">
	<div id="newest-books">
		<div class='row'>
			<h3>Newest Books</h3>
		</div>
		<div class="row">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['name'] = 'sec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newest_items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div class="row">						
						<div class="item-image">						
							<img src="<?php echo $_smarty_tpl->tpl_vars['item_image_path']->value;
echo $_smarty_tpl->tpl_vars['newest_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
.jpg" width="75" height="100">
						</div>						
					</div>
					<div class="row">
						<a tabindex="-1" href="item.php?item_id=<?php echo $_smarty_tpl->tpl_vars['newest_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['newest_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_name'];?>

						</a>
					</div>
					<div class="row">
						by
						<a tabindex="-1" href="maker.php?maker_id=<?php echo $_smarty_tpl->tpl_vars['newest_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_id'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['newest_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_name'];?>

						</a>
					</div>
					<div class="row">									
						<?php echo $_smarty_tpl->tpl_vars['newest_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

					</div>
				</div>
			<?php endfor; endif; ?>
		</div>
	</div>	
	
	<div id="popular-books">
		<div class='row'>
			<h3>Most Popular Books</h3>
		</div>
		<div class="row">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['name'] = 'sec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['popular_items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div class="row">						
						<div class="item-image">						
							<img src="<?php echo $_smarty_tpl->tpl_vars['item_image_path']->value;
echo $_smarty_tpl->tpl_vars['popular_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
.jpg" width="75" height="100">
						</div>						
					</div>
					<div class="row">
						<a tabindex="-1" href="item.php?item_id=<?php echo $_smarty_tpl->tpl_vars['popular_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_id'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['popular_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['item_name'];?>

						</a>
					</div>
					<div class="row">
						by
						<a tabindex="-1" href="maker.php?maker_id=<?php echo $_smarty_tpl->tpl_vars['popular_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_id'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['popular_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['maker_name'];?>

						</a>
					</div>
					<div class="row">									
						<?php echo $_smarty_tpl->tpl_vars['newest_items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec']['index']]['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

					</div>
				</div>
			<?php endfor; endif; ?>
		</div>
	</div>	
</div><!-- /.container --> <?php }} ?>
