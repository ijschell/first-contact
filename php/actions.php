<?php
include 'functions.php';

if(isset($_POST['insert'])){
  insertRegister($database, $_POST['mail'],$_POST['name'],$_POST['lastname'], $_POST['phone'], $_POST['interes']);
}
?>
