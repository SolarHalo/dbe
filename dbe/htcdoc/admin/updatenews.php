<?php
ob_start();
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
		if($news_body){
			$news_body = str_replace("\\", "",$news_body);
		}
		if(!$news_order||$news_order==''){
			$news_order = 0;
		}
		$id = $_POST['news_id'];
		$news = array("id"=>$id,"news_title"=>$news_title,"news_order"=>$news_order,"news_type"=>$news_type,"news_createtime"=>$news_createtime,"news_body"=>$news_body);
		$dbenews = new DbeNews($dbutil);
		$result = $dbenews->updateNew($news,$id);
		if($result>0){
			header("Location: displaynews.php");
//			//移除所有图片
//			deldir("../upload");
		}else{
			echo "更新新闻失败！";
		}
	}else{
		//查询根据id查询新闻
		$news_id = $_GET['news_id'];
		$dbenews = new DbeNews($dbutil);
		$updatenews = $dbenews->getNewsById($news_id);
		$smarty->assign("new",$updatenews);
		$smarty->assign("newstype",$newstype);
		$currentnav = "news";
		$managetpl = "admin/updatenews.tpl";
		$smarty->assign("news_id",$news_id);
		$smarty->assign("currentnav",$currentnav);
		$smarty->assign("managetpl",$managetpl);
		$smarty->display("admin/index.tpl");
	}
	


ob_end_flush();//输出全部内容到浏览器 
?>