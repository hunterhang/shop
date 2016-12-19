<?php
/* Smarty version 3.1.30, created on 2016-12-19 17:44:08
  from "C:\xampp\htdocs\shop\tpl\admin\session.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5857abe861ea69_92202506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '599ca768409d5d795e007e849c30ddb49b79d596' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\tpl\\admin\\session.html',
      1 => 1482137475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5857abe861ea69_92202506 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--todo: -->
<?php if ($_SESSION['admin_username']['username'] != '') {
echo '<script'; ?>
 language='javascript'>
alert("您尚未登录或登录过期，请重新登录");
parent.window.location.href='index.php?c=admin&a=index';
<?php echo '</script'; ?>
>
<?php }
}
}
