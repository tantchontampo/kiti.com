<?php /*%%SmartyHeaderCode:11543432795825e7743091f1-66643640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '11543432795825e7743091f1-66643640',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e7eecdd909_36182403',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e7eecdd909_36182403')) {function content_5825e7eecdd909_36182403($_smarty_tpl) {?>
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
										<form action="/index.php" method="get">
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
