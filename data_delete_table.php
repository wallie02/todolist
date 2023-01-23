<?php

require_once('database_connection.php');

$readID = $_GET['id'];
$sql = " DELETE FROM bucketlist where id=$readID ";
$query = mysqli_query($conn,$sql); 

if($query){
    header("location: data_insert_table.php");
}else{
    echo " Failed ";
}