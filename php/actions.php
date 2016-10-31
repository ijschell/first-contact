<?php
include 'functions.php';

if(isset($_POST['insert'])){

  if(isset($_POST['sitio'])){
    $sitio = 'si';
  }else {
    $sitio = 'no';
  }

  insertRegister($database, $_POST['name'], $_POST['mail'], $sitio);
}
?>
