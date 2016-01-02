<?php

$con= mysqli_connect("127.0.0.1","root","","final")or die("ERROR to connect");





$sql="DROP DATABASE  IF EXISTS final";
mysqli_query($con,$sql)or die(mysqli_error($con));
$sql="CREATE DATABASE  final";
mysqli_query($con,$sql)or die(mysqli_error($con));

?>