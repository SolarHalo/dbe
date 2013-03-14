<?php
include "../../configs/load.php";
include BASE_HOME."includes/Administrator.class.php";

if(!array_key_exists('administrator', $_SESSION)){
	//如果更换文件名，此处需修改
	$currentPage = "usermanage.php";
	header("Location: login.php?pageto=".$currentPage);
}

$mgtype = false;
if(array_key_exists('type', $_GET)){
	$mgtype = $_GET['type'];
}else{
	$mgtype = 'user';
}

$smarty->assign("mgtype", $mgtype);

if($mgtype == 'user'){
	$currentnav = "users";
	$managetpl = "admin/normalusermanage.tpl";
	$admindb = new Administrator($dbutil);
	$users = $admindb->getAllUsers();
	$smarty->assign('users',$users);
}else if($mgtype == 'admin'){
	$currentnav = "admins";
	$managetpl = "admin/adminusermanage.tpl";
	$admindb = new Administrator($dbutil);
	$admins = $admindb->getAllAdmins();
	$smarty->assign('admins', $admins);
}

$smarty->assign("currentnav",$currentnav);
$smarty->assign("managetpl",$managetpl);
$smarty->display("admin/index.tpl");
?>