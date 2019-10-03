

<?php
  
  require_once '../functions.php';

  if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = sanitizeString($_POST['username']);
    $password = sanitizeString($_POST['password']);
    
    queryMysql("INSERT INTO members (user,pass) VALUES ('$username','$password')");

    queryMysql(" INSERT INTO profiles (user) VALUES ('$username') ");
  }

 ?>