<?php 

require_once("inc/config.php");
$pageTitle = "Silver Creek Survey";
include(ROOT_PATH . 'inc/header.php');



 ?>

<html>
	<body>
	 	<div id="index-content">
	 	 <div class="welcome">
	  		<h2>GO DRAGONS!</h2> 		
	  	</div>

	  	<div class="dragon">
	  		<img class="dragon" src="img/g386.png"> 
	  	</div>

	  <div class="form">
	  	<center>
			<form action="vote.php" method="post">

				<p>Name</p><input type="text" name="name"><br>
				<p>E-mail</p><input type="text" name="email"><br>
				<p>Sr./Jr.</p><input type="text" name="srjr"><br>
				<p>King</p><input type="text" name="king"><br>
				<p>Queen</p><input type="text" name="queen"><br><br>

				<input class="submit" type="submit" value="VOTE">

			</form>
		</center>
	  </div>
	</body>
</html>