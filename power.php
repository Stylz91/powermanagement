<?php
session_start(); //Nicht vergessen
$name = $_POST['name'];

$_SESSION['username'] = $name;

echo "Hallo " . $name;
?>