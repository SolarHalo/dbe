<?php /* Smarty version Smarty-3.1.13, created on 2013-02-22 02:39:40
         compiled from "D:\game\odds_game\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326325126da6ce8ddc1-83429915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df1f6e81e29185e9d4f581e2ef97e8d8fc3e0919' => 
    array (
      0 => 'D:\\game\\odds_game\\templates\\login.tpl',
      1 => 1361291506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326325126da6ce8ddc1-83429915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlroot' => 0,
    'logintem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5126da6cf1ef24_44484673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5126da6cf1ef24_44484673')) {function content_5126da6cf1ef24_44484673($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/login.js"></script>
<div class="container"> 
        <div class="tietle">
            <font>登录</font>&nbsp;&or;
        </div>
        <div class="container-left">
        	
        	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['logintem']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        	
        </div>
        <!-- left END --> 
    </div>
</div> 


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>