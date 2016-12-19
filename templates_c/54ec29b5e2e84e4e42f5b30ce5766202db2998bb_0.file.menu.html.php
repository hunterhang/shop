<?php
/* Smarty version 3.1.30, created on 2016-12-19 16:50:33
  from "C:\xampp\htdocs\shop\tpl\admin\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58579f59ddd652_19782222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ec29b5e2e84e4e42f5b30ce5766202db2998bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\tpl\\admin\\menu.html',
      1 => 1482137432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin/session.html' => 1,
  ),
),false)) {
function content_58579f59ddd652_19782222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:tpl/admin/session.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" href="skin/admin/style/base.css" type="text/css" />
<link rel="stylesheet" href="skin/admin/style/menu.css" type="text/css" />
<?php echo '<script'; ?>
 language='javascript'>var curopenItem = '1';<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="skin/admin/js/menu.js"><?php echo '</script'; ?>
>
<base target="main" />
</head>
<!-- 左边菜单开始 -->
<body target="main" style="text-align:left; background:#F6F6F6">
<table width='99%' height="100%" border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='padding-left:3px;' valign="top">
<?php if ($_smarty_tpl->tpl_vars['qx1']->value == "1") {?>
      <dl class='bitem'>
        <dt onClick='showHide("items1_1")'><b>订单管理</b></dt>
        <dd style='' class='sitem' id='items1_1'>
          <ul class='sitemu'>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'orderlist'),$_smarty_tpl);?>
' target='main'>客户订单管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'order','a'=>'searchorder'),$_smarty_tpl);?>
' target='main'>订单查询</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'order','a'=>'addorder'),$_smarty_tpl);?>
' target='main'>手动添加订单</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'html','a'=>'yejihis'),$_smarty_tpl);?>
' target='main'>业绩结算历史</a></li>
          </ul>
        </dd>
      </dl>
<?php }
if ($_smarty_tpl->tpl_vars['qx2']->value == "1") {?>
      <dl class='bitem'>
        <dt onClick='showHide("items2_1")'><b>报表统计</b></dt>
        <dd style='' class='sitem' id='items2_1'>
          <ul class='sitemu'>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'order','a'=>'table_day'),$_smarty_tpl);?>
' target='main'>日统计报表</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'reports','a'=>'table_month'),$_smarty_tpl);?>
' target='main'>月统计报表</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'reports','a'=>'table_year'),$_smarty_tpl);?>
' target='main'>年统计报表</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'area'),$_smarty_tpl);?>
' target='main'>区域统计报表</a></li>
          </ul>
        </dd>
      </dl>
<?php }
if ($_smarty_tpl->tpl_vars['qx3']->value == "1") {?>
      <dl class='bitem'>
        <dt onClick='showHide("items3_1")'><b>收款方式管理</b></dt>
        <dd style='' class='sitem' id='items3_1'>
          <ul class='sitemu'>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'alipay'),$_smarty_tpl);?>
' target='main'>支付宝接口管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'chinabank'),$_smarty_tpl);?>
' target='main'>网银在线接口管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'tenpay'),$_smarty_tpl);?>
' target='main'>财付通接口管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'yeepay'),$_smarty_tpl);?>
' target='main'>易宝接口管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'paypal'),$_smarty_tpl);?>
' target='main'>Paypal接口管理</a></li>
		    <!--<li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'bankpay'),$_smarty_tpl);?>
' target='main'>银行帐号管理</a></li>-->
          </ul>
        </dd>
      </dl>
<?php }
if ($_smarty_tpl->tpl_vars['qx4']->value == "1") {?>
      <dl class='bitem'>
        <dt onClick='showHide("items4_1")'><b>产品管理</b></dt>
        <dd style='' class='sitem' id='items4_1'>
          <ul class='sitemu'>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'group'),$_smarty_tpl);?>
' target='main'>产品组管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'product'),$_smarty_tpl);?>
' target='main'>产品管理</a></li>
          </ul>
        </dd>
      </dl>
<?php }
if ($_smarty_tpl->tpl_vars['qx5']->value == "1") {?>
      <dl class='bitem'>
        <dt onClick='showHide("items5_1")'><b>提醒设置</b></dt>
        <dd style='' class='sitem' id='items5_1'>
          <ul class='sitemu'>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'sms','a'=>'smsshow'),$_smarty_tpl);?>
' target='main'>客户短信提醒设置</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'email'),$_smarty_tpl);?>
' target='main'>后台邮件提醒设置</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'mobile'),$_smarty_tpl);?>
' target='main'>后台短信提醒设置</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'sound','a'=>'show'),$_smarty_tpl);?>
' target='main'>新订单声音提醒设置</a></li>
          </ul>
        </dd>
      </dl>
<?php }
if ($_smarty_tpl->tpl_vars['qx6']->value == "1") {?>
      <dl class='bitem'>
        <dt onClick='showHide("items6_1")'><b>其他设置</b></dt>
        <dd style='' class='sitem' id='items6_1'>
          <ul class='sitemu'>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'books','a'=>'send'),$_smarty_tpl);?>
' target='main'>发货设置</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'guestbook'),$_smarty_tpl);?>
' target='main'>留言管理</a></li>
<!--		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'newsort'),$_smarty_tpl);?>
' target='main'>新闻分类管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'addnews'),$_smarty_tpl);?>
' target='main'>发布新闻</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'newslist'),$_smarty_tpl);?>
' target='main'>新闻管理</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'news','a'=>'moban'),$_smarty_tpl);?>
' target='main'>新闻模板管理</a></li>
-->          </ul>
        </dd>
      </dl>
<?php }
if ($_smarty_tpl->tpl_vars['qx7']->value == "1") {?>
      <dl class='bitem'>
        <dt onClick='showHide("items7_1")'><b>超级管理</b></dt>
        <dd style='' class='sitem' id='items7_1'>
          <ul class='sitemu'>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'html','a'=>'showyeji'),$_smarty_tpl);?>
' target='main'>客服业绩与结算</a></li>
		    <!--<li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'news','a'=>'showuseremail'),$_smarty_tpl);?>
' target='main'>客户邮件群发</a></li>-->
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'order','a'=>'isdel'),$_smarty_tpl);?>
' target='main'>订单回收站</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'order','a'=>'output'),$_smarty_tpl);?>
' target='main'>订单导出</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'log'),$_smarty_tpl);?>
' target='main'>操作日志</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'loginlog'),$_smarty_tpl);?>
' target='main'>登录日志</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'addadmin'),$_smarty_tpl);?>
' target='main'>添加客服</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'adminlist'),$_smarty_tpl);?>
' target='main'>客服列表</a></li>
		    <li><a href='controller/scan.php' target='main'>木马自检</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'kuaidi','a'=>'keys'),$_smarty_tpl);?>
' target='main'>快递追踪设置</a></li>
		    <li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'others','a'=>'showbak'),$_smarty_tpl);?>
' target='main'>数据库备份</a></li>
		    <!--<li><a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'macaddr','a'=>'show'),$_smarty_tpl);?>
' target='main'>客户端登陆绑定</a></li>-->
          </ul>
        </dd>
      </dl>
<?php }?>
	  </td>
  </tr>
</table>
<!-- 左边菜单结束 -->
</body>
</html>
<?php }
}
