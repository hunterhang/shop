<?php
/* Smarty version 3.1.30, created on 2016-12-19 17:44:37
  from "C:\xampp\htdocs\shop\tpl\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5857ac058d1bc5_08107109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb457caba8da75e6fe0d2e14e8182cd9fb28aa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\tpl\\admin\\main.html',
      1 => 1482140676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin/session.html' => 1,
  ),
),false)) {
function content_5857ac058d1bc5_08107109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:tpl/admin/session.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="pragma" CONTENT="no-cache"> 
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate"> 
<META HTTP-EQUIV="expires" CONTENT="0"> 
<link rel="stylesheet" href="skin/admin/style/base.css" type="text/css" />
<link rel="stylesheet" href="skin/admin/style/main.css" type="text/css" />
<link rel="alternate stylesheet" type="text/css" href="skin/admin/Upimg/1024.css" />
<style type="text/css" media="all">
@import "skin/admin/Upimg/thickbox.css";
</style>
<?php echo '<script'; ?>
 type="text/javascript" src="skin/admin/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="skin/admin/js/Validform.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$(".registerform:last").Validform({
		tiptype:2,
		ajaxPost:true,
		callback:function(data){
			if(data.status=="y"){
				setTimeout(function(){
					$.Hidemsg(); //公用方法关闭信息提示框;
				},2000);
			}
		}
	});
})
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="skin/admin/Upimg/thickbox-compressed.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="skin/admin/Upimg/global.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/swfobject.js"><?php echo '</script'; ?>
>
<title>管理系统</title>
</head>
<body onload="">
<div class="rbox">
  <div class="ur_here">
    <div class="path fl" align="left">PIMS在线订单管理系统<span>-管理首页</span></div>
</div>  
  <div class="add_box"><br />
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><table width="240" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse" bordercolor="#c6c6c6">
          <tr>
            <td height="25" align="center" bgcolor="#f2f2f2"><strong>昨日统计</strong></td>
          </tr>
          <tr>
            <td height="25" align="center"><table width="90%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="42%" height="25" align="left">未处理订单</td>
                <td width="58%" align="right"><font color="#FF0000"><strong><?php echo $_smarty_tpl->tpl_vars['y1']->value;?>
</strong></font>笔</td>
              </tr>
              <tr>
                <td height="25" align="left">待发货订单</td>
                <td align="right"><font color="#FF0000"><strong><?php echo $_smarty_tpl->tpl_vars['y2']->value;?>
</strong></font>笔</td>
              </tr>
              <tr>
                <td height="25" align="left">订单总量</td>
                <td align="right"><font color="#FF0000"><strong><?php echo $_smarty_tpl->tpl_vars['y3']->value;?>
</strong></font>笔</td>
              </tr>
              <tr>
                <td height="25" align="left">成交总额</td>
                <td align="right"><font color="#FF0000"><strong><?php if ($_smarty_tpl->tpl_vars['zong3']->value == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['zong3']->value;
}?></strong></font>元</td>
              </tr>
              <tr>
                <td height="25" align="left">未处理总额</td>
                <td align="right"><font color="#FF0000"><strong><?php if ($_smarty_tpl->tpl_vars['zong4']->value == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['zong4']->value;
}?></strong></font>元</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="20">&nbsp;</td>
        <td align="center"><table width="240" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse" bordercolor="#c6c6c6">
          <tr>
            <td height="25" align="center" bgcolor="#f2f2f2"><strong>今日统计</strong></td>
          </tr>
          <tr>
            <td height="25" align="center"><table width="90%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="42%" height="25" align="left">未处理订单</td>
                <td width="58%" align="right"><font color="#FF0000"><strong><?php echo $_smarty_tpl->tpl_vars['t1']->value;?>
</strong></font>笔</td>
              </tr>
              <tr>
                <td height="25" align="left">待发货订单</td>
                <td align="right"><font color="#FF0000"><strong><?php echo $_smarty_tpl->tpl_vars['t2']->value;?>
</strong></font>笔</td>
              </tr>
              <tr>
                <td height="25" align="left">订单总量</td>
                <td align="right"><font color="#FF0000"><strong><?php echo $_smarty_tpl->tpl_vars['t3']->value;?>
</strong></font>笔</td>
              </tr>
              <tr>
                <td height="25" align="left">成交总额</td>
                <td align="right"><font color="#FF0000"><strong><?php if ($_smarty_tpl->tpl_vars['zong1']->value == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['zong1']->value;
}?></strong></font>元</td>
              </tr>
              <tr>
                <td height="25" align="left">未处理总额</td>
                <td align="right"><font color="#FF0000"><strong><?php if ($_smarty_tpl->tpl_vars['zong2']->value == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['zong2']->value;
}?></strong></font>元</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="20">&nbsp;</td>
        <td align="center"><table width="240" border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse" bordercolor="#c6c6c6">
          <tr>
            <td height="25" align="center" bgcolor="#f2f2f2"><strong>授权信息</strong></td>
          </tr>
          <tr>
            <td height="25" align="center"><table width="90%" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" align="left">当前版本</td>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['bb1']->value;?>
</td>
              </tr>
              <tr>
                <td width="42%" height="25" align="left">最新版本</td>
                <td width="58%" align="right"><a href="http://www.diantuo.net" target="_blank">查看</a></td>
              </tr>
              <tr>
                <td height="25" align="left">系统语言</td>
                <td align="right">Php+Mysql</td>
              </tr>
              <tr>
                <td height="25" align="left">授权对象</td>
                <td align="right">免费</td>
              </tr>
              <tr>
                <td height="25" align="left">官网</td>
                <td align="right"><a href="http://www.diantuo.net" target="_blank">点击进入</a></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="20" align="center">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table>
    <br />
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="middle"><?php echo $_smarty_tpl->tpl_vars['showz']->value;?>
</td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
<?php }
}
