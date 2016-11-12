<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 16:44:32
         compiled from "/home/koomaakiey/pprod/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2144716255825e7608143e9-73654126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b940b5f1e5371bc8438288185b1f3e07e2f3bd0' => 
    array (
      0 => '/home/koomaakiey/pprod/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1420621556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2144716255825e7608143e9-73654126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e76081eb22_92120405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e76081eb22_92120405')) {function content_5825e76081eb22_92120405($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
