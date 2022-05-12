<?php
  include 'database_conn.php';	  // make db connection

  $sql = "SELECT toyName, description, toyPrice FROM NTL_toys"; // selects the required tables from the database to be displayed
  $queryResult = $dbConn->query($sql);

  // Check for and handle query failure
  if($queryResult === false) {
	echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
	exit;
  }
  // Otherwise fetch all the rows returned by the query one by one
   else {
     while($rowObj = $queryResult->fetch_object()){
	echo "<div><span>{$rowObj->toyName}</span>, <span>{$rowObj->description}</span>, <span>{$rowObj->toyPrice}</span></div>";
     }
  }
  $queryResult->close();
  $dbConn->close();
?>
