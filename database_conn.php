<?php
   $dbConn = new mysqli('localhost', 'unn_w20017978', 'RyanFieldWeb1!', 'unn_w20017978'); //connects to the newnumyspace

   if ($dbConn->connect_error) {
      echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
      exit;
   }
?>
