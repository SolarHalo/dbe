<?php
ob_start();
include "../configs/load.php";
if(!array_key_exists('user', $_SESSION)){
//	$currentPage = "dbmessage.php";
//	header("Location: login.php?pageto=".$currentPage);
	$smarty->assign("loged",'N');
}else{
	$smarty->assign("loged",'Y');
	$user = $_SESSION['user'];
	$username = $user->user_name;
	$smarty->assign("username",$username);
}


$type = $_GET['type'];
if(!$type){
	header("Location: index.php");
}
if($type=='dbe'){
	$displayPage = "dbe.tpl";
}elseif ($type=='df-712u'){
	$displayPage = "df-712u.tpl";
}elseif ($type=="dr-640r"){
	$displayPage = "dr-640r.tpl";
}elseif ($type=='design'){
	$displayPage = "design.tpl";
}elseif ($type=='operation'){
	$displayPage = 'operation.tpl';
}elseif ($type=='company'){
	$displayPage = 'company.tpl';
}
$smarty->display($displayPage);
ob_end_flush();
?>