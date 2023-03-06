<?php
$dbServername='localhost';
$username='root';
$password='';
$conn=mysqli_connect($dbServername,$username,$password,"final_project");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>