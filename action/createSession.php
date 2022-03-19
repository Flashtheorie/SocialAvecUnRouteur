<?php 
session_start();
require './class/functions.php'; 
$rand = rand(0,9999);

GenerateNoms();


header('Location: home');

?>