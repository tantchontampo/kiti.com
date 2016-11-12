<?php /*%%SmartyHeaderCode:20450805015825e89e941730-56009364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79f8ccec9d2c8f4a0cb9111e7dff836915a970a0' => 
    array (
      0 => '/home/koomaakiey/pprod/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1478870041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20450805015825e89e941730-56009364',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e89e97d392_53115682',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e89e97d392_53115682')) {function content_5825e89e97d392_53115682($_smarty_tpl) {?>
	<p class="socialsharing_product list-inline no-print">
					<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://pprod.koomaakiti.com/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> Partager
				<!-- <img src="http://pprod.koomaakiti.com/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							</p>
<?php }} ?>
