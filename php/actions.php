<?php
include 'functions.php';


if(isset($_POST['insert'])){
  insertRegister($database, $_POST['mail'],$_POST['name']);
}
?>
