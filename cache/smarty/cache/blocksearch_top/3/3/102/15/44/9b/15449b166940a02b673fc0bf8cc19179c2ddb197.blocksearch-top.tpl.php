<?php /*%%SmartyHeaderCode:33366674056feea2ef14c34-91158650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15449b166940a02b673fc0bf8cc19179c2ddb197' => 
    array (
      0 => '/home/koomaakiey/pprod/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1420621556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33366674056feea2ef14c34-91158650',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_573843445c1731_22916692',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573843445c1731_22916692')) {function content_573843445c1731_22916692($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//pprod.koomaakiti.com/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
