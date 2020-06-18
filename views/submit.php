<!DOCTYPE html>
<html>
	<head>
		<title>pollen</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.js" integrity="sha256-wypDCQw+qwWtdARZAAtUMv/1SWOEB1XHZwAFoNc9Wn8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.css" integrity="sha256-+dIh4jG2jQTHZwW81yUo8h6tzXWcNumyNL5XPZbwp1E=" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="/views/animations.js"></script>
	</head>
	<body>


		<section class="animation">
			<div class="wrapper">
				<div class="wrapper items">
					<div class="wrapper items">
						<h2>Submit a Story</h2>

						<form action="submit.php" method="post">
							<label for="userEmail">Email</label>
							<input type="text" id="userEmail" name="userEmail"/>

							<label for="userSource">Article Link</label>
							<input type="text" id="userSource" name="userSource"/>

							<label for="userDescription">Article Description</label>
							<textarea name="userDescription"></textarea>

							<input type="submit" value="Submit"/>
						</form>

<?php

						$servername = "us-cdbr-east-05.cleardb.net";
						$username = "b8f493d5441bba";
						$password = "d2ebee76";
						$dbname = "heroku_7f19938a1668d8e";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 

						if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
							$userEmail = $_POST["userEmail"];
							$userSource = $_POST["userSource"];
							$userDescription = $_POST["userDescription"];

							// If something was submitted, store into db
							$sql = "INSERT INTO userStories (email, source, description) ";
							$sql .= "VALUES ('$userEmail', '$userSource', '$userDescription')";

							$result = $conn->query($sql);

							// Select everthing that was submitted
							$sql = "SELECT * FROM userStories ORDER BY id DESC LIMIT 1";

							$result = $conn->query($sql);

							// Output submission
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
								//	echo "Email: " . $row["email"] . "<br>" . "Article Link: " . $row["source"]. "<br>" . "Article Description: " . $row["description"];
									?>
										<span class="submit">Email: 
<?php 						
											echo( $row["email"] );
?>
										</span>
										<span class="submit">Article Link:
<?php
											echo( $row["source"] );
?>
										</span>
										<span class="submit">Article Description:
<?php
											echo( $row["description"]);
?>	
										</span>		
									<?php
		
								}
							}
						}

						// Close connection
						$conn->close();
?>
					</div>
				</div>
			</div>
		</section>

	</body>

	<footer>
		<div class="footer-buttons">
			<a href="mailto:pollen.forensicbotany@gmail.com"><i class="fa fa-envelope"></i></a>
			<a href="https://github.com/pollenators/pollen"><i class="fa fa-github"></i></a>
			<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>  
		</div>
	</footer>

</html>