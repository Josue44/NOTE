<?php

session_start();

//print_r($_SESSION);

$date="";
$module="";
$heure="";
$resume="";
$idee="";
$rappel="";



$date=$_POST["date"];
$id_Module=$_POST["module"];
$heure=$_POST["heure"];
$resume=$_POST["resume"];
$idee=$_POST["idee"];
$rappel=$_POST["rappel"];




$hostname = 'localhost';
$username = 'root'; 
$password = '';  


//try {   

//include('cnx.php');

	$db = new PDO("mysql:host=$hostname;dbname=note_db", $username, $password );     
	




   
  $ID=$_SESSION['id_user'];

  $sql2 = "INSERT INTO note VALUES ('','$date','$idee','$resume','$rappel', ' $id_Module','$ID')"; 
 
 $db->exec($sql2);  

echo "\nPDOStatement::errorInfo():\n";
$arr = $db->errorInfo();
print_r($arr);




echo "<script>alert(\"Les données sont bien enregistrées!\")</script>"; 
include("acceuil.php");





?>