<?php

$servername="localhost:3306";
$dBUsername="mahs_DGW";
$dBPassword="mustangs";
$dBName="mahs_DGW";

$conn= mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("connection failed: ".mysqli_connect_error());
}