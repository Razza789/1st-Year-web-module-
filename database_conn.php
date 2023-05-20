<?php
   $dbConn = new mysqli('localhost', '', '', ''); //connects to the newnumyspace

   if ($dbConn->connect_error) {
      echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
      exit;
   }
?>
