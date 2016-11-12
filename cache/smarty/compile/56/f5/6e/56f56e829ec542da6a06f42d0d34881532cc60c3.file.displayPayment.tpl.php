<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 16:46:13
         compiled from "/home/koomaakiey/pprod/modules/paydunya/views/templates/hook/displayPayment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6679972085825e7c5eea6c9-16389669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56f56e829ec542da6a06f42d0d34881532cc60c3' => 
    array (
      0 => '/home/koomaakiey/pprod/modules/paydunya/views/templates/hook/displayPayment.tpl',
      1 => 1478879091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6679972085825e7c5eea6c9-16389669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'paydunya_paynow_text' => 0,
    'paydunya_paynow_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e7c5ef5669_51778555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e7c5ef5669_51778555')) {function content_5825e7c5ef5669_51778555($_smarty_tpl) {?><div class="row">
    <div class="col-xs-12">
        <p class="payment_module">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('paydunya','payment'), ENT_QUOTES, 'UTF-8', true);?>
" class="paydunya">
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['paydunya_paynow_text']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp1,'mod'=>'paydunya'),$_smarty_tpl);?>
<br>
                <small class="text-muted"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['paydunya_paynow_description']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp2,'mod'=>'paydunya'),$_smarty_tpl);?>
</small>
            </a>
        </p>
    </div>
</div><?php }} ?>
