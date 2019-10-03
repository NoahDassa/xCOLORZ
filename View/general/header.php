<?php

session_start();

require_once  __DIR__.'/../../Controller/functions.php';

if (isset($_SESSION['username']))
{
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $loggedin = TRUE;
  $userstr  = "Logged in as: $username";
}
else $loggedin = FALSE;

?>


  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- <link rel="stylesheet" href="/xCOLORZ/View/general/debug.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

  <title>XCOLORZ</title>
</head>


