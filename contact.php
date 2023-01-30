<?php 

use App\Mailer ;

$nom = $_POST['nom'] ;
$email = $_POST['email'] ;
$sujet = $_POST['subject'] ;
$message = $_POST['message'] ;

$page = "index.php";
header('location:'. $page) ;