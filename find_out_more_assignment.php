<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Chollerton Tearooms - Find Out More</title>
    <link rel="stylesheet" type="text/css" href="css_assignment.css">	
	<style>
		body{
			background-color: hsla(255, 30%, 50%, 0.2);
			background-image: url("Tearoom2.jpg");
			background-repeat: no-repeat;
			background-position: right;
			background-size: 1200px 750px;
		}
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
	</style>
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
    <form method="post" action="process_form.php" class="page-body">
      <br>
	  <label for="forename">Forename:</label>
      <br>
      <input type="text" id="forename" name="forename" required>
      <br><br>
      <label for="surname">Surname:</label>
      <br>
      <input type="text" id="surname" name="surname" required>
      <br><br>
      <label for="address">Postal Address:</label>
      <br>
      <input type="text" id="address" name="address" required>
      <br><br>
      <label for="mobiletelno">Mobile Tel No:</label>
      <br>
      <input type="text" id="mobiletelno" name="mobiletelno" required>
      <br><br>
      <label for="email">Email Address:</label>
      <br>
      <input type="text" id="email" name="email" required>
      <br><br>
      <label for="category">Interested In:</label>
      <br>
      <select id="category" name="category">
        <option value="" selected disabled>Select a category</option>
        <option value="c1">Bed and Breakfast</option>
        <option value="c2">Craft Shop</option>
        <option value="c3">Post Office</option>
        <option value="c4">Tearoom</option>
        <option value="c5">Village Store</option>
      </select>
      <br><br>
      <label for="send">Send Option:</label>
      <br>
      <select id="send" name="send">
        <option value="" selected disabled>Select an option</option>
        <option>Email</option>
        <option>Post</option>
      </select>
      <br><br>
      <input type="submit" value="Submit">
	
    </form>
<footer>
  <p style="text-align: center;">&copy; 2023 Chollerton Tearooms</p>
</footer>
  </body>
</html>
