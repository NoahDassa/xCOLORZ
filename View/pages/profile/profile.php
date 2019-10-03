
<?php

require_once "../../general/header.php";

if (!$loggedin) die("</div></body></html>");

?>

<link rel="stylesheet" href="profile.css">
<script src="profile.js"></script>

<!-- dependencies for sign up modal -->
<?php  
require_once '../profile/editProfile/modal.php'  ?>
<link rel="stylesheet" href="../profile/editProfile/modal.css">
<script src="../profile/editProfile/modal.js"></script>

<body>

 <div class="center"><h1><?php echo $username ?></h1></div>  

</body>
</html>
























  
 