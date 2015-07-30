<?php 

require_once("inc/config.php");
$pageTitle = "Silver Creek Survey";
include(ROOT_PATH . 'inc/header.php');

 ?>



<html>
	<body>

		<div id="index-content">
	 	 <div class="welcome">
	  		<h2>Thanks For Voting!</h2> 		
	  	</div>

	  	<div class="dragon">
	  		<img class="dragon" src="img/g386.png"> 
	  	</div>

	  <div id="content">
	  	<h1>Welcome <?php echo $_POST["name"]; ?></h1><br><br>
		<h2>Your email address is: <?php echo $_POST["email"]; ?><br><br>
		You are a: <?php echo $_POST["srjr"]; ?><br><br>
		You voted for <?php echo $_POST["king"]; ?> as your prom King!<br><br>
		You voted for <?php echo $_POST["queen"]; ?> as your prom Queen!</h2>

		<form action="index.php">
    		<input class="submit" type="submit" value="DONE">
		</form>
		
	  </div>

	</body>
</html>

<?php

$db_user = 'root';
$db_pass = '';
$db_name = 'silver_creek_survey';
$db_host = 'localhost';
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$srjr=trim($_POST['srjr']);
$king=trim($_POST['king']);
$queen=trim($_POST['queen']);
$time = time();

$query = "INSERT INTO prom_votes (name, email, srjr, king, queen, post_date)
		 VALUES ('$name', '$email', '$srjr', '$king', '$queen', FROM_UNIXTIME({$time}))";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_errno){
	printf("Connection failed: %s\n", $mysqli->connect_error);
	exit();
}

$result = $mysqli->query($query);