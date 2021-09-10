<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$con=mysqli_connect($url,$username,$password,"banking");
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}
?>