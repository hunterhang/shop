<?php
/* Smarty version 3.1.30, created on 2016-12-19 16:45:40
  from "C:\xampp\htdocs\shop\tpl\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58579e343411f3_20495879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25890c670a999b84afd7d302a4d3fd5983522bca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\tpl\\admin\\login.html',
      1 => 1482137116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58579e343411f3_20495879 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>PIMS在线订单管理系统</title>
<link rel="stylesheet" type="text/css" href="skin/admin/style/base.css" />
<link rel="stylesheet" type="text/css" href="skin/admin/style/main.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="skin/admin/js/jquery-1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
$(function(){
  $("#logact").click(function(){
    var user = $("#username").val();
    var pwd = $("#password").val();
    var pcode = $("#checkcode").val();
    if(user == ""){
        alert("请填写用户名!");
        $("#username").focus();
        return false;
    };
    if(pwd == ""){
        alert("请填写密码!");
        $("#password").focus();
        return false;
    };
    <!--todo: -->
    if(pcode != ""){
        alert("请填写验证码!");
        $("#checkcode").focus();
        return false;
    };
  }); 
});
<?php echo '</script'; ?>
>
</head>
<body style="background:url(skin/admin/images/login_bg.jpg) repeat-x;"><br />
<form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'login'),$_smarty_tpl);?>
">
<input name="mymac" id="mymac" type="hidden" />
<div class="login_bg">
  <div class="login">
    <h1>管理员登陆</h1>
    <div class="login_table">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="80" height="35"><label>帐&nbsp;号:</label></td>
          <td colspan="2" valign="middle"><input name="username" type="text" class="inp01 inptext" id="username" /></td>
        </tr>
        <tr>
          <td height="35"><label>密&nbsp;码:</label></td>
          <td colspan="2" valign="middle"><input name="password" type="password" class="inp01 inptext" id="password" /></td>
        </tr>
        <tr>
          <td height="35"><label>验证码:</label></td>
          <td width="110" valign="middle"><input name="checkcode" type="text" class="inp02 inptext" id="checkcode" maxlength="4" /></td>
          <td width="180" align="left" valign="middle">
              <!--todo: -->
              <!--<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'_vcode'),$_smarty_tpl);?>
" style="cursor:pointer;" onclick="this.src='index.php?c=admin&a=_vcode&' + Math.random(1)" alt="看不清楚,点击图片刷新" />-->
          </td>
        </tr>
        <tr>
          <td height="40" class="td1">&nbsp;</td>
          <td colspan="2" valign="bottom"><input name="" type="submit" value="" class="btn02" id="logact" />
            <input name="" type="reset" value="" class="btn03" /></td>
        </tr>
      </table>
    </div>
  </div>
</div>
</form>
<div class="login_footer">Copyright © 2009-2011 最强大的在线订单管理系统<a href="http://www.diantuo.net" target="_blank">www.diantuo.net</a></div>
</body>
</html>
<?php }
}
