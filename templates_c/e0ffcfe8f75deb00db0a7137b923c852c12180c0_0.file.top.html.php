<?php
/* Smarty version 3.1.30, created on 2016-12-19 16:46:26
  from "C:\xampp\htdocs\shop\tpl\admin\top.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58579e6205d336_59701421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ffcfe8f75deb00db0a7137b923c852c12180c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\tpl\\admin\\top.html',
      1 => 1482112977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58579e6205d336_59701421 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台管理系统</title>
<link href="skin/admin/style/base.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="skin/admin/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="skin/admin/js/jquery.timers.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$('body').everyTime('1das','C',function(){
	$.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'sound','a'=>'ding'),$_smarty_tpl);?>
', '', function(result){
		  $("#ss").html(result);
	});
},0,true);
function modalDialog(url, name, width, height)
{
  if (width == undefined)
  {
    width = 400;
  }
  if (height == undefined)
  {
    height = 300;
  }

  if (window.showModalDialog)
  {
    window.showModalDialog(url, name, 'dialogWidth=' + (width) + 'px; dialogHeight=' + (height+5) + 'px; status=off');
  }
  else
  {
    x = (window.screen.width - width) / 2;
    y = (window.screen.height - height) / 2;

    window.open(url, name, 'height='+height+', width='+width+', left='+x+', top='+y+', toolbar=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, modal=yes');
  }
}
<?php echo '</script'; ?>
>
</head>
<body>
<div class="frameHeader">
  <div class="frameLogo fl"><img src="skin/admin/images/frameLogo.png" border="0" /></div>
  <div class="frameTopMenu fr"><a href="index.php?c=admin&a=clearcache" target='main'><img src="skin/admin/images/icon_clear.gif" border="0" /></a><a onclick="parent.window.location.href='index.php?c=admin&a=center'"><img src="skin/admin/images/icon_center.gif" /></a><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'logout'),$_smarty_tpl);?>
"><img src="skin/admin/images/icon_out.gif" /></a></div>
</div><div id="ss"></div>
</body>
</html><?php }
}
