<?php
		
	function fileDownload($fileName,$baseHome){
//		$expire = 180;
//		$filePath = $baseHome.'htcdoc/files/'.$fileName;
//        $type = "application/octet-stream";
//        iconv('utf-8', 'gb2312', $filePath);
//        $length = filesize($filePath);
//	    //发送Http Header信息 开始下载
//	    header("Pragma: public");
//	    header("Cache-control: max-age=".$expire);
//	    //header('Cache-Control: no-store, no-cache, must-revalidate');
//	    header("Expires: " . gmdate("D, d M Y H:i:s",time()+$expire) . "GMT");
//	    header("Last-Modified: " . gmdate("D, d M Y H:i:s",time()) . "GMT");
//	    header("Content-Disposition: attachment; filename=".$fileName);
//	    header("Content-Length: ".$length);
//	    header("Content-type: ".$type);
//	    header('Content-Encoding: none');
//	    header("Content-Transfer-Encoding: binary" );
//	    readfile($filePath);
//	    exit();

		//在服务器响应浏览器的请求时，告诉浏览器以编码格式为UTF-8的编码显示该内容 
		header("Content-type:text/html;charset=utf-8"); 
		//用以解决中文不能显示出来的问题 
		$file_name=iconv("utf-8","gb2312",$fileName); 
//		$file_sub_path=$_SERVER['DOCUMENT_ROOT']."marcofly/phpstudy/down/down/"; 
		$file_path = $baseHome.'htcdoc/files/'.$fileName;
		//首先要判断给定的文件存在与否 
		if(!file_exists($file_path)){ 
			echo "没有该文件文件"; 
			return ; 
		} 
		$fp=fopen($file_path,"r"); 
		$file_size=filesize($file_path); 
		//下载文件需要用到的头 ,通过这句代码客户端浏览器就能知道服务端返回的文件形式 
		Header("Content-type: application/octet-stream"); 
		//告诉客户端浏览器返回的文件大小是按照字节进行计算的 
		Header("Accept-Ranges: bytes"); 
		Header("Accept-Length:".$file_size); 
		Header("Content-Disposition: attachment; filename=".$file_name); 
		$buffer=1024; 
		$file_count=0; 
		//向浏览器返回数据 
		while(!feof($fp) && $file_count<$file_size){ 
		$file_con=fread($fp,$buffer); 
		$file_count+=$buffer; 
		echo $file_con; 
		} 
		//可以把缓冲区内最后剩余的数据输出到磁盘文件中，并释放文件指针和有关的缓冲区
		fclose($fp); 
						
	}
	
	function fileUpload(){
		
		
	}

?>