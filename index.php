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
					<p>Name</p><input type="text" name="name" id="name" required placeholder="      First and Last Name"><br>
					<p>E-mail</p><input type="email" name="email" id="email" required placeholder="    @schs.edu email only"><br>
					<p>Sr./Jr.</p><input type="text" name="srjr" id="srjr" required placeholder="        Senior or Junior?"><br>
					<p>King</p><input type="text" name="king" id="king" required placeholder="      Vote for Prom King"><br>
					<p>Queen</p><input type="text" name="queen" id="queen" required placeholder="     Vote for Prom Queen"><br><br>
					<input class="submit" type="submit" value="VOTE">
				</form>
				</center>
		    </div>
	    </div>
	 </body>
</html>