<?php /*%%SmartyHeaderCode:83214569556fef338b91284-44737459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260c1e47e9dc7ab26c930ce6f9965a6437336630' => 
    array (
      0 => '/home/koomaakiey/pprod/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1420621556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83214569556fef338b91284-44737459',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5738435559d455_54181477',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738435559d455_54181477')) {function content_5738435559d455_54181477($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					Fournisseurs
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="first_item">
                                Alpha
                				</li>
															<li class="item">
                                Boissons
                				</li>
															<li class="item">
                                ECOPRESTO
                				</li>
															<li class="last_item">
                                Fashion Supplier
                				</li>
										</ul>
										<form action="/modules/paypal/express_checkout/payment.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Tous les fournisseurs</option>
													<option value="http://pprod.koomaakiti.com/index.php?id_supplier=3&amp;controller=supplier">Alpha</option>
													<option value="http://pprod.koomaakiti.com/index.php?id_supplier=4&amp;controller=supplier">Boissons</option>
													<option value="http://pprod.koomaakiti.com/index.php?id_supplier=2&amp;controller=supplier">ECOPRESTO</option>
													<option value="http://pprod.koomaakiti.com/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
