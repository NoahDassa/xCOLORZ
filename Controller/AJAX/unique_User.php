

<?php

require_once '../functions.php';

if(isset($_POST['userValue'])) {
  
  $userValue = sanitizeString($_POST['userValue']);
  $result = queryMysql("SELECT * FROM members WHERE user = '$userValue' ");

  if($result->num_rows) {
    echo "Username already exists";
  } else {
  echo "";
  }
}

?>  