<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chollerton Tearooms - View Requests</title>
	<link rel="stylesheet" type="text/css" href="css_assignment.css">
	<style>
		main {
			min-height: calc(100vh - 100px); 
		}
  
		footer {
			height: 60px;
			background-color: LightGray;
			text-align: center;
			width: 100%; 
			margin-top: auto;
		}
		
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}
		
		th, td {
			text-align: left;
			padding: 50px;
			border-bottom: 1px solid #ddd;
		}
		
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<header>
		<h1>Chollerton Tearooms</h1>
		<nav>
			<ul>
				<li><a href="main.html">Home</a></li>
				<li><a href="find_out_more_assignment.php">Find Out More</a></li>
				<li><a href="view_requests_assignment.php">View Requests</a></li>
				<li><a href="credits.php">Credits</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>View Requests</h2>
		<p>
		<?php
		
$dbh = new PDO('mysql:host=localhost;dbname=unn_w22027467', 'unn_w22027467', '@Nsh881585');

$sql = "SELECT CT_expressedInterest.forename, CT_expressedInterest.surname,CT_expressedInterest.postalAddress, CT_expressedInterest.email, CT_expressedInterest.mobileTelNo, CT_expressedInterest.sendMethod, CT_category.catDesc
        FROM CT_expressedInterest
        JOIN CT_category
        ON CT_expressedInterest.catID = CT_category.catID
        ORDER BY CT_expressedInterest.surname";

$stmt = $dbh->query($sql);

echo '<table>';
echo '<tr><th>Forename</th><th>Surname</th><th>Postal Address</th><th>Email</th><th>Mobile Tel No.</th><th>Send Method</th><th>Category</th></tr>';
foreach ($stmt as $row) {
    echo '<tr>';
    echo '<td>' . $row['forename'] . '</td>';
    echo '<td>' . $row['surname'] . '</td>';
	echo '<td>' . $row['postalAddress'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['mobileTelNo'] . '</td>';
	echo '<td>' . $row['sendMethod'] . '</td>';
    echo '<td>' . $row['catDesc'] . '</td>';
    echo '</tr>';
}
echo '</table>';

$dbh = null;
?>
</p>
	</main>
<footer>
  <p style="text-align: center;">&copy; 2023 Chollerton Tearooms</p>
</footer>
</body>
</html>