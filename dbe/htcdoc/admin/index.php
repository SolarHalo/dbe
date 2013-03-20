<?php
ob_start();
include "../../configs/load.php";

if(!array_key_exists('administrator', $_SESSION)){
	$currentPage = "index.php";
	header("Location: login.php");
}



//$admin_user = $_SESSION['administrator'];

//$smarty->assign("currentnav" , "index");
//$smarty->assign("managetpl",null);
//$smarty->assign("currentnav","news");


$smarty->display("admin/index.tpl");
ob_end_flush();//输出全部内容到浏览器 
?>