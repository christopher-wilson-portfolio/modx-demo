<?php /* Smarty version 3.1.27, created on 2017-08-29 15:31:42
         compiled from "/home/thescope/modx.christopherwilson.biz/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:119820395659a5c11e1759f3_22632712%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f09249e5a2113c4175bf35b2fdde2c1b2faee9' => 
    array (
      0 => '/home/thescope/modx.christopherwilson.biz/manager/templates/default/welcome.tpl',
      1 => 1492708876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119820395659a5c11e1759f3_22632712',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a5c11e1773f7_38943483',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a5c11e1773f7_38943483')) {
function content_59a5c11e1773f7_38943483 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119820395659a5c11e1759f3_22632712';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>