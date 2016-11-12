<?php /* Smarty version Smarty-3.1.19, created on 2016-04-01 23:37:54
         compiled from "/home/koomaakiey/pprod/modules/paypal/views/templates/hook/express_checkout_shortcut_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105884955456feea32a55ff9-96173646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7040ad1f9dd0f311d13c0bafc2c6a839218ed77' => 
    array (
      0 => '/home/koomaakiey/pprod/modules/paypal/views/templates/hook/express_checkout_shortcut_button.tpl',
      1 => 1446752846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105884955456feea32a55ff9-96173646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_mobile' => 0,
    'base_dir_ssl' => 0,
    'PayPal_lang_code' => 0,
    'paypal_express_checkout_shortcut_logo' => 0,
    'include_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56feea32a77735_14791582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56feea32a77735_14791582')) {function content_56feea32a77735_14791582($_smarty_tpl) {?>

<div id="container_express_checkout" style="float:right; margin: 10px 40px 0 0">
	<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value) {?>
		<div style="margin-left:30px">
			<img id="payment_paypal_express_checkout" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/views/img/logos/express_checkout_mobile/CO_<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
_orange_295x43.png" alt="" />
		</div>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut_logo']->value!=false) {?>
		<img id="payment_paypal_express_checkout" src="<?php echo $_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut_logo']->value;?>
" alt="" />
		<?php } else { ?>
		<img id="payment_paypal_express_checkout" src="https://www.paypal.com/<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
/i/btn/btn_xpressCheckout.gif" alt="" />
		<?php }?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['include_form']->value)&&$_smarty_tpl->tpl_vars['include_form']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_dir']->value)."./express_checkout_shortcut_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
</div>
<div class="clearfix"></div>
<?php }} ?>
