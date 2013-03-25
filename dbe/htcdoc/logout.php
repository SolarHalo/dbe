<?php
ob_start();
require '../configs/load.php';


unset($_SESSION['user']); 

header("Location: index.php");
ob_end_flush();//输出全部内容到浏览器 
?>