<?php
//appel du fichier function.php
require_once('functions.php');
// connexion a la bd
$db = connectToDb('0000','video_game');


$result=deleteGame($db, $_GET['destroy_select']);
if ($result == true) {
  session_start();
  $_SESSION['success_message']="suppression effective";
}else {
  $_SESSION['error_message']="suppression echoué";
}
header("Location:index.php");die;
