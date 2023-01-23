<?php

$conn = mysqli_connect('localhost','root','','listtodo');

if(!$conn) {
    die ("databse connection hasn't been successful!".mysqli_connection_error()) ;
}