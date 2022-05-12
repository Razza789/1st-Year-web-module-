<?php
  include 'database_conn.php';

?>

<!doctype html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <title>Results</title>
</head>
<body>
<?php
//Checks to see if the user has input information in the fields. 
$ToyNameErr = $DescriptionErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["ToyName"])) {
	  $ToyNameErr = "Toy Name is required";
	} 
}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["Description"])) {
			$DescriptionErr = "Description is required";
		} 
}
	//Requests what the data the user has put into the form
	$ToyName = $_REQUEST['ToyName'];
	$Description = $_REQUEST['Description'];
	$Price = $_REQUEST['Price'];
  	$ToyCategory = $_REQUEST['ToyCategory'];
	$ToyManufacturer = $_REQUEST['ToyManufacturer'];

	//Inserts the data from the forms into the database
	$sql = "INSERT INTO NTL_toys (toyName, description, toyPrice) VALUES ('$ToyName', '$Description', '$Price')";
	if(mysqli_query($dbConn, $sql)){
		echo "<h3>data stored in NTL_toys successfully." 
			. " Please browse your localhost php my admin" 
			. " to view the updated data</h3>"; 

		echo nl2br("\n$ToyName\n $Description\n "
			. "$Price\n \n$ToyCategory \n$ToyManufacturer");
	}
	else{
		echo "ERROR:Sorry $sql. " 
			. mysqli_error($dbConn);
	}
?>
</body>
</html>