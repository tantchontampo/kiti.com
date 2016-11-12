<?php /*%%SmartyHeaderCode:44704904856fef338909520-81958470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22c383163129d8815823b373f3ea57705c4292fa' => 
    array (
      0 => '/home/koomaakiey/pprod/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1420621556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44704904856fef338909520-81958470',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5738435546f0f2_93471414',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738435546f0f2_93471414')) {function content_5738435546f0f2_93471414($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
						Fabricants
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://pprod.koomaakiti.com/index.php?id_manufacturer=1&amp;controller=manufacturer" title="En savoir plus sur Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/modules/paypal/express_checkout/payment.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Tous les fabricants</option>
													<option value="http://pprod.koomaakiti.com/index.php?id_manufacturer=1&amp;controller=manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
