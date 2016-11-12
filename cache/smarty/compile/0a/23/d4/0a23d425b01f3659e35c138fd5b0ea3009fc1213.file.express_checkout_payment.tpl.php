<?php /* Smarty version Smarty-3.1.19, created on 2016-04-13 12:43:43
         compiled from "/home/koomaakiey/pprod/modules/paypal/views/templates/hook/express_checkout_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789475341570e22df873df8-10198045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a23d425b01f3659e35c138fd5b0ea3009fc1213' => 
    array (
      0 => '/home/koomaakiey/pprod/modules/paypal/views/templates/hook/express_checkout_payment.tpl',
      1 => 1446752846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789475341570e22df873df8-10198045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_in_context_checkout' => 0,
    'use_mobile' => 0,
    'base_dir_ssl' => 0,
    'PayPal_lang_code' => 0,
    'logos' => 0,
    'PayPal_payment_method' => 0,
    'PayPal_integral' => 0,
    'PayPal_content' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570e22df9565f3_53208740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e22df9565f3_53208740')) {function content_570e22df9565f3_53208740($_smarty_tpl) {?>

<?php if (@constant('_PS_VERSION_')>=1.6) {?>

<div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module paypal">
        	<?php if ($_smarty_tpl->tpl_vars['PayPal_in_context_checkout']->value==1) {?>
				<a href="javascript:void(0)" onclick="" id="paypal_process_payment" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
			<?php } else { ?>
				<a href="javascript:void(0)" onclick="$('#paypal_payment_form').submit();" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
			<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value) {?>
					<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/paypal/views/img/logos/express_checkout_mobile/CO_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_lang_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_orange_295x43.png" />
				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'])&&$_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_integral']->value) {?>
						<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" height="48px" />
					<?php } else { ?>
						<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'];?>

				<?php }?>
				
			</a>
		</p>
    </div>
</div>

<style>
	p.payment_module.paypal a 
	{
		padding-left:17px;
	}
</style>
<?php } else { ?>
<p class="payment_module">
		<a href="javascript:void(0)" id="paypal_process_payment" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
		<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/views/img/logos/express_checkout_mobile/CO_<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
_orange_295x43.png" />
		<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'])&&$_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_integral']->value) {?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'];?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" height="48px" />
			<?php } else { ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'];?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'];?>

		<?php }?>
		
	</a>
</p>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['PayPal_in_context_checkout']->value==1) {?>
	<input type="hidden" id="in_context_checkout_enabled" value="1">
<?php } else { ?>
<script>
	$(document).ready(function(){
		$('#paypal_process_payment').click(function(){
			$('#paypal_payment_form').submit();
		})
	});
</script>
<?php }?>
<form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post">
	<input type="hidden" name="express_checkout" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_payment_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_current_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
</form><?php }} ?>
