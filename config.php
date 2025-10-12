<?php

$hostname='localhost';
$username='root';
$password='';
$databasename='phpproject';

$mysqli = mysqli_connect($hostname,$username,$password,$databasename);
if($mysqli === false){
    die("error:coule not conncted" .mysqli_connect_error());
}
echo "connection sucessfuly you process the data base";