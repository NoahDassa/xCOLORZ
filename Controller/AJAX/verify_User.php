

<?php

require_once '../functions.php';

session_start();

if(isset($_POST['username']) && isset($_POST['password']))  {

  $username = sanitizeString($_POST['username']);
  $password = sanitizeString($_POST['password']);

  if($username != "" && $password != "") {
 
    $result = queryMysql("SELECT * FROM members WHERE user = '$username' AND pass = '$password'");

    if($result->num_rows) {
      echo  json_encode(true);

      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;


    } else {//false values
      echo  json_encode(false)."values";
    }
  }  else {//no values entered
      echo  json_encode(false);
  }
}


?>