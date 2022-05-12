<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
<title>Northumbria Toy Company - Credits</title> 
</head>
<body>
<link href="toy.css" rel="stylesheet">
<div class="gridContainer">
    <header>
        <h1>Northumbria Toy Company Toy Page</h1>
    </header>
    <nav>
        <ul>
            <li><a href="Home.html">Home</a></li> 
			<li><a href="Toys.php">View Toys</a></li> 
			<li><a href="Admin.html">Admin</a></li> 
			<li><a href="Credits.html">Credits</a></li>
        </ul>
    </nav>
    <main>
    <?php
  include 'toyquery.php';
  ?>
    </main>
    <footer>
		<p>Contact us at: 07958538492</p>
        <p>Northumbria Toy Company &copy; 2022</p>
            </footer>
        </div>
    
</body> 
</html>