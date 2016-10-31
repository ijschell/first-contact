<?php
include 'functions.php';

if(isset($_POST['insert'])){

  if(isset($_POST['sitio'])){
    $sitio = 'si';
  }else {
    $sitio = 'no';
  }
  
  insertRegister($database, $_POST['mail'],$_POST['name'], $sitio);
}
?>
