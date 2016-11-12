<?php /* Smarty version Smarty-3.1.19, created on 2016-05-13 16:25:01
         compiled from "/home/koomaakiey/pprod/admin7423/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18997462875735e3bdb3b023-21554873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f3bc16eb4d03948acb2940eed5b883f92acb855' => 
    array (
      0 => '/home/koomaakiey/pprod/admin7423/themes/default/template/controllers/stats/stats.tpl',
      1 => 1420621554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18997462875735e3bdb3b023-21554873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5735e3bdb4f472_56483271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5735e3bdb4f472_56483271')) {function content_5735e3bdb4f472_56483271($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
