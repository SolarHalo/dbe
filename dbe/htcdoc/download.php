<?php
ob_start();
require '../configs/load.php';
include BASE_HOME.'includes/FileUtil.php';


if(!array_key_exists('user', $_SESSION)){
	$smarty->assign("loged",'N');
//	$currentPage = "download.php";
//	header("Location: login.php?pageto=".$currentPage);
}else{
	$smarty->assign("loged",'Y');
	$user = $_SESSION['user'];
	$username = $user->user_name;
	$smarty->assign("username",$username);
}

$fileName=$_GET['fileName'];
if($fileName){
	fileDownload($fileName, BASE_HOME);
}else{
	$smarty->display("download.tpl");
}
ob_end_flush();//输出全部内容到浏览器 

?>