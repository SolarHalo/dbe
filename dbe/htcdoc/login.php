<?php
require '../configs/load.php';
include BASE_HOME.'includes/DbeUser.class.php';


if(array_key_exists('user_name', $_POST) && array_key_exists('user_passwd', $_POST)){
	$username = $_POST['user_name'];
	$password = $_POST['user_passwd'];
	$userdb = new DbeUser($dbutil);
	$user = $userdb->login($username, encodePassword($password));
	//登录成功，保存登录用户信息
	if($user){
		$_SESSION['user'] = $user;
		$pageto = $_GET['pageto'];
		if(!$pageto){
			$pageto = "index.php";
		}
		header("Location: ".$pageto);
//		header("Location: index.php");
	}else{
		$smarty->assign("loged",'N');
		$smarty->display("login.tpl");
	}
}else{
	$smarty->assign("loged",'N');
	$smarty->display("login.tpl");
	
}


?>