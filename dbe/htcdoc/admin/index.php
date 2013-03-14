<?php
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
?>