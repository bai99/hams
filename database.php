<?php 
$dbHost='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='hamsone';

$db=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($db->connect_error){
die("conection failed:".$db->connect_error);



}

?>