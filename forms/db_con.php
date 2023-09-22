<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "sociovative";
mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $connection = new mysqli($hostname,$username,$password,$dbname);
    
}
catch(Exception $ex){
    echo "Connection Failed".$ex->getMessage();
    exit();
}
?>