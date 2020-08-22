<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<ul>
<body style="background-color: #E9E9E9">
</body>
<li><a href="#home">Hunkers</a></li>
<li><a href="#home" style="padding-bottom: 6px"><waf>Module Distribution System</waf></a></li>
</ul>
</ul>
<div class="paper-box" align="center">
  <div class="submit-form">
  	<form action="confirm.php" method="POST">	
  	  <label for="fname">Module Code:</label><br>
  	  <input type="number" id="CODE" name="CODE" maxlength=6><br>
  	  <label for="lname">Full Name:</label><br>
  	  <input type="text" id="name" name="name"><br>
	  <label for="lname">Documents to submit:</label><br>
		  <input type="file" name="documents" multiple/><br>
  		<input class="submit-search" type="submit" id="btn" name="btn" value="enter" style=""><br>  	  
  	</form>
  </div>
</div>

<?php

if(isset($_GET['error']))
{
	if($_GET['error'] == 1)
	{
		echo '<div class="footer" style="color: #B10000;">
		The module code provided was not found or does not exist.
		</div>';
	}
}