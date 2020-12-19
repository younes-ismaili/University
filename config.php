<?php
$hostname="localhost";
$database_name="university";
$database_user="root";
$database_user_password="";
$connection = mysqli_connect($hostname,$database_user,$database_user_password,$database_name);
if(!$connection){
    die('Could not Connect My Sql:' .mysql_error());
 }
?>