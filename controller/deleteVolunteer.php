<?php
require '../model/db.php';
require '../model/volunteerManager.php';

$db = connectDataBase();

//Delete a volunteers by ID
if(!empty($_GET)){
  $id = $_GET['id'];
  deleteVolunteer($id, $db);
    if(deleteVolunteer($id, $db))
    {
      header('Location: gestionVolunteer.php');
      exit;
    }
}

 ?>
