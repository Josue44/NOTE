<?php


//print_r($_SESSION);

$date="";
$nom="";
$prenom="";
$email="";
$password="";

$date=$_POST["date"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];







$hostname = 'localhost';
$username = 'root'; 
$password = '';  


//try {   

//include('cnx.php');

	$db = new PDO("mysql:host=$hostname;dbname=note_db", $username, $password );     
	




   
 

  $sql2 = "INSERT INTO admin VALUES ('','$nom','$prenom','$date', '$email','".$_POST['password']."','".$_POST['image']."')"; 
 
 $db->exec($sql2);  



print_r($_POST);


echo "<script>alert(\"Les données sont bien enregistrées!\")</script>"; 
include("inscrire.php");





?>