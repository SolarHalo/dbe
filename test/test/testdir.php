<?php
//echo "http://".$_SERVER ['HTTP_HOST'];
//echo $_SERVER["DOCUMENT_ROOT"];
//
//$newPath = explode(":", $_SERVER["DOCUMENT_ROOT"]);
//echo "<br/>".$newPath[1];


function format_url($srcurl, $baseurl) {  
  $srcinfo = parse_url($srcurl);
  if(isset($srcinfo['scheme'])) {
    return $srcurl;
  }
  $baseinfo = parse_url($baseurl);
  print_r($baseinfo);
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

$srcurl = '../upload';
echo "ab:".realpath($srcurl)."<br/>";
$baseurl = 'http://localhost/test/test/testdir.php';
format_url($srcurl, $baseurl);
//echo "<br/>http://".$_SERVER ['HTTP_HOST'];
//$url_this =  "http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF'];
//echo $url_this;
?>