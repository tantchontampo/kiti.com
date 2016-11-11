<?php /*%%SmartyHeaderCode:3937297995825e7743998c8-47036858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '3937297995825e7743998c8-47036858',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e7743ee0e1_38273380',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e7743ee0e1_38273380')) {function content_5825e7743ee0e1_38273380($_smarty_tpl) {?>
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
															<li class="last_item">
                                Fashion Supplier
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Tous les fournisseurs</option>
													<option value="http://pprod.koomaakiti.com/index.php?id_supplier=3&amp;controller=supplier">Alpha</option>
													<option value="http://pprod.koomaakiti.com/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
