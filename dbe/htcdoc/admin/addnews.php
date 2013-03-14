<?php
include "../../configs/load.php";
include '../../includes/DbeNews.class.php';
if(!array_key_exists('administrator', $_SESSION)){
	header("Location: login.php");
}

	if(array_key_exists("news_title", $_POST)){
		$news_title = $_POST['news_title'];
		$news_order = $_POST['news_order'];
		$news_type = $_POST['news_type'];
		$news_body = $_POST['content'];
		$news_createtime = $_POST['date'];
		$news_type = $_POST['news_type'];
		
		$news = array("news_title"=>$news_title,"news_order"=>$news_order,"news_type"=>$news_type,"news_createtime"=>$news_createtime,"news_body"=>$news_body);
		$newsdb = new DbeNews($dbutil);
		$result = $newsdb->addNew($news);
		if($result>0){
//			$currentnav = "news";
//			$managetpl = "admin/displaynews.tpl";
//			$smarty->assign("currentnav","news");
//			$smarty->assign("managetpl","admin/displaynews.tpl");
//			$smarty->display("admin/index.tpl");
			header("Location: displaynews.php");
		}else{
			echo "新增新增失败";
		}
	}else{
		$currentnav = "addNews";
		$managetpl = "admin/addnews.tpl";
		$smarty->assign("currentnav",$currentnav);
		$smarty->assign("managetpl",$managetpl);
		$smarty->display("admin/index.tpl");
		
		
	}

?>