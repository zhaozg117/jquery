<?php
//echo time();
//echo json_encode($_POST);
echo $_GET["callback"]."(".json_encode($_GET).");";
//print_r($_POST);
//echo json_encode($_GET);
//echo "alert(123)";
?>
