<?php
include ("Function_Backup.php");

echo backup_tables("localhost","root","","paipad");
$fecha=date("Y-m-d");
header("Content-disposition: attachment; filename=paipad-".$fecha.".sql");
header("Content-type: MIME");
readfile("paipad-".$fecha.".sql");