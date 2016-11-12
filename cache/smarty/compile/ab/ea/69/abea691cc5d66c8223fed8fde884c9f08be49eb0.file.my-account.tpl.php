<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 16:46:54
         compiled from "/home/koomaakiey/pprod/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6316656895825e7eecf9bc8-78908923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abea691cc5d66c8223fed8fde884c9f08be49eb0' => 
    array (
      0 => '/home/koomaakiey/pprod/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1420621556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6316656895825e7eecf9bc8-78908923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e7eed15404_16377929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e7eed15404_16377929')) {function content_5825e7eed15404_16377929($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
