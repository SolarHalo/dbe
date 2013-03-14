<?php
require '../configs/load.php';


unset($_SESSION['user']); 

header("Location: index.php");
?>