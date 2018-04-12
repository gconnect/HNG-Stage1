
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<ul class="menu">
			<li><a href="#">GCONNECT</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Careers</a></li>
			<li><a href="#"> Contact</a></li>
			<li> <?php
				echo "Today is " . date("Y/m/d");
			?>	
			</li>
			<li>
				 <?php
					echo "The time is " . date("h:i:sa");
				?> 
			</li>
		</ul>

	</div>
	<div class="image">
		<img class ="img-circle" src="./images/DESIGN.jpg" alt="Glory" style="width:100%;">

		<div class="portfolio">
			<h1 class="design">We are Designers</h1>
			<h1 class="design">and Great Coders</h1>
			<button class="curve-button">
				<h3 class="curve-button">Install our App For Free</h3>
			</button>
		</div>

	
	</div>

	

</body>
</html>