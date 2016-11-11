<?php /* Smarty version Smarty-3.1.19, created on 2016-04-22 22:13:14
         compiled from "/home/koomaakiey/pprod/admin7423/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1894816152571a85da8b2b96-74154074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a5901972de527b96aa25d644cda327431a92c0' => 
    array (
      0 => '/home/koomaakiey/pprod/admin7423/themes/default/template/controllers/shop/content.tpl',
      1 => 1420621554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894816152571a85da8b2b96-74154074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_571a85da8ba8d6_33891150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571a85da8ba8d6_33891150')) {function content_571a85da8ba8d6_33891150($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
