<?php /* Smarty version Smarty-3.1.13, created on 2013-03-22 13:58:17
         compiled from "D:\workspace4php\dbe-a\dbe\templates\admin\fileupload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23454514aca2de57277-11290255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0186cb98457ddac1413e87520545aa9f5ac4278e' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\admin\\fileupload.tpl',
      1 => 1363931893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23454514aca2de57277-11290255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514aca2debc042_80637637',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514aca2debc042_80637637')) {function content_514aca2debc042_80637637($_smarty_tpl) {?>
<form  method="post" enctype="multipart/form-data" style="margin-left:50px;margin-top:50px;">
<!--<label for="文件名">文件名:</label>-->
	<input type="file" name="file" id="file" size="50"/> 
	<br />
	<br />
	<input type="submit" name="submit" value="上传图片" class="btn btn-primary"/>
</form>


<?php }} ?>