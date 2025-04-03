
<?php

require_once '../../general/header.php';

?>    

<link rel="stylesheet" href="index.css">
<script src="index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- dependencies for sign up modal -->
<?php  
require_once '../index/signUp/modal.php'  ?>
<link rel="stylesheet" href="../index/signUp/modal.css">
<script src="../index/signUp/modal.js"></script>


<body>
  <div id="container">
    <div></div>  <!-- 1 -->
    <div id="title"><p id="a"></p>          
      <div class="btn">
        <p id="a">X</p>
        <p id="b">COLOR</p>
        <p id="c">Z</p>
      </div>
      <p id="d"></p>
    </div> 
    <div></div>  <!-- 2 -->
    <div></div>  <!-- 3 -->
    <div></div>  <!-- 4 -->
    <div></div>  <!-- 5 -->
    <div></div>  <!-- 6 -->
    <div id="signUp_or_logIn">
      <!-- form that appears at landing -->
      <div><button id="signUp_modal" onclick="openModal()">Sign Up</button></div>
      <div><button  id="login_button" onclick="display_loginForm()">Log In</button></div>
      <!-- form that appears when user chooses to log in -->
      <form method="post" action="../../pages/profile/profile.php" id="login_form" onsubmit="return false">
        <div> <input type="text" name="username" id="login_username" placeholder="Enter Username" value= <?php echo $username; ?> ></div>
        <div> <input type ="password" id="login_password" placeholder="Enter Password" value= <?php echo $password; ?> ></div>
      </form>
      <div><button id="login_User" onclick="loginUser()">Log In</button></div>
    </div>
    <div></div>  <!-- 8 -->
    <div></div>  <!-- 9 -->
    <div id="login_message" ></div>
    <div></div>  <!-- 11 -->
    <div></div>  <!-- 12 -->
  </div>
  
  <?php
  
  
  
   ?>
  
 
  
  
  
  
  
 


 
