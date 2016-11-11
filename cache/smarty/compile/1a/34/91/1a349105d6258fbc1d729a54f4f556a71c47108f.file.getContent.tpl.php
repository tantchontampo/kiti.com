<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 16:45:01
         compiled from "/home/koomaakiey/pprod/modules/paydunya/views/templates/hook/getContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5790852095825e77d8fe745-86186431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a349105d6258fbc1d729a54f4f556a71c47108f' => 
    array (
      0 => '/home/koomaakiey/pprod/modules/paydunya/views/templates/hook/getContent.tpl',
      1 => 1478879091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5790852095825e77d8fe745-86186431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e77d90ade5_37856151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e77d90ade5_37856151')) {function content_5825e77d90ade5_37856151($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
    <div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Settings updated','mod'=>'paydunya'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
