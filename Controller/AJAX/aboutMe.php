<?php

require_once '../functions.php';

$username1 = $_POST['username1'];
$aboutMe = $_POST['aboutMe'];

queryMysql(" UPDATE profiles SET text = '$aboutMe' WHERE user ='$username1' ");

$result = queryMysql(" SELECT * FROM profiles WHERE user ='$username1' ");

$row = $result->fetch_array(MYSQLI_ASSOC);

if ($result->num_rows){
  
  $aboutMe = $row['text'];

  echo $aboutMe;
}





if(isset($_POST['aboutMe']) && isset($_POST['username']))  {
  
  $username = sanitizeString($_POST['username']);
  $aboutMe  = sanitizeString($_POST['aboutMe']);

  queryMysql(" UPDATE profiles SET text = '$aboutMe' WHERE user = '$username' ");

}





if(isset($_POST['username'])) {

  $username = $_POST['username'];

  $result = queryMysql("SELECT * FROM profiles WHERE user = '$username' ");
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 
  $aboutMe = $row['text'];

  echo $aboutMe;
  
}
?>