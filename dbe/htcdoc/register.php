<?php
ob_start();
include "../configs/load.php";
include "../includes/DbeUser.class.php";

//if(array_key_exists("user_name", $_POST)&&array_key_exists("user_passwd", $_POST)){
//	$user_name = $_POST['user_name'];
//	$user_passwd = $_POST['user_passwd'];
//	$user_email = $_POST['user_email'];
//	$user_industy = $_POST['user_industy'];
//	$user_company = $_POST['user_company'];
//	$user_phone = $_POST['user_phone'];
//	$user_fullname = $_POST['user_fullname'];
//	
//	$user = array("user_name"=>$user_name,
//		"user_passwd"=>encodePassword($user_passwd),
//		"user_fullname"=>$user_fullname,
//		"user_company"=>$user_company,
//		"user_industy"=>$user_industy,
//		"user_phone"=>$user_phone,
//		"user_email"=>$user_email,
//	);
//	
//	$dbeUser = new DbeUser($dbutil);
//	$dbeUser->addUser($user);
//	echo '注册成功';
//	
//}else{
//	
//	$smarty->assign("urlroot" , urlroot);
//	$smarty->display("register.tpl");
//	
//}

	$smarty->assign("urlroot" , urlroot);
	$smarty->display("register.tpl");
	

ob_end_flush();

?>