<?php
session_start();

$artwork = $_POST['artwork'];
$starttime = $_POST['starttime'];
$startdate = $_POST['startdate'];

echo $artwork .",". $starttime .",". $startdate;


$conn = mysqli_connect('localhost', 'root', 'admin', 'power');