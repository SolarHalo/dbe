<?php
include "../../configs/load.php";

unset($_SESSION['administrator']); 

header("Location: login.php");
?>