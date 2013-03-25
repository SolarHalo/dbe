<?php
function encodePassword($password){
	return md5($password."iboadmin");
}

/**
 * 将相对url转换为绝对url
 * Enter description here ...
 * @param unknown_type $srcurl 相对路径
 * @param unknown_type $baseurl 文件所在url
 */
function format_url($srcurl, $baseurl) {  
  $srcinfo = parse_url($srcurl);
  if(isset($srcinfo['scheme'])) {
    return $srcurl;
  }
  $baseinfo = parse_url($baseurl);
  $url = $baseinfo['scheme'].'://'.$baseinfo['host'];
  if(substr($srcinfo['path'], 0, 1) == '/') {
    $path = $srcinfo['path'];
  }else{
    $path = dirname($baseinfo['path']).'/'.$srcinfo['path'];
  }
  $rst = array();
  $path_array = explode('/', $path);
  if(!$path_array[0]) {
    $rst[] = '';
  }
  foreach ($path_array AS $key => $dir) {
    if ($dir == '..') {
      if (end($rst) == '..') {
        $rst[] = '..';
      }elseif(!array_pop($rst)) {
        $rst[] = '..';
      }
    }elseif($dir && $dir != '.') {
      $rst[] = $dir;
    }
   }
  if(!end($path_array)) {
    $rst[] = '';
  }
  $url .= implode('/', $rst);
  return str_replace('\\', '/', $url);
}

/**
 * 删除文件加下的所有文件
 * Enter description here ...
 * @param unknown_type $dir 文件目录
 * @param unknown_type $delDir 是否删除当前文件夹 默认不删除
 */
function deldir($dir,$delDir=false) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
 
  closedir($dh);
  //删除当前文件夹：
  if($delDir==true){
  	rmdir($dir);
  }
}

/**
 * 
 * 获取目录下所有文件（文件名，文件url）
 * @param unknown_type $urlpre 文件目录url
 */
function getDirFiles($dirpath){
	$fileArr = array();
	$handler = opendir($dirpath);
	//2、循环的读取目录下的所有文件
	/*其中$filename = readdir($handler)是每次循环的时候将读取的文件名赋值给$filename，为了不陷于死循环，所以还要让$filename !== false。一定要用!==，因为如果某个文件名如果叫’0′，或者某些被系统认为是代表false，用!=就会停止循环*/
	while( ($filename = readdir($handler)) !== false )
	{
		//3、目录下都会有两个文件，名字为’.'和‘..’，不要对他们进行操作
		if($filename != '.'&& $filename != '..')
		{
		 //PATH_SEPARATOR  .
//		 array_push($fileArr, $dirpath.$filename);
			$fileArr[$filename]=$dirpath.$filename;
		 }
	}
	//5、关闭目录
	closedir($handler);
	return $fileArr;
}

/**
 * 删除目录下的指定文件
 * @param unknown_type $filePath
 */
function deleteFile($filePath){
	if(!file_exists($filePath)){
		return false;
	}
	return unlink($filePath);
	
}

?>