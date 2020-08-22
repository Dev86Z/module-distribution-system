<html style="background-color: #AEAEAE;">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<ul>
<body style="background-color: #E9E9E9">
</body>
<!--<li><a href="?menu" align="left" style="margin-top: 1%; padding-left: 10px; top: 50%"><img src="menu.svg.png" length="3%" width="3%" align="left"></a></li-->
<li><a href="#home" style="margin-right: 1px; margin-left: 1px; padding-top: 5px;">Hunkers</a></li>
</ul>
		<div class="form">
			<form action="home.php" method="POST">			
				<h1 align="center" style="margin-top: 9%; font-family: 'Century Gothic', sans-serif;">Module Distribution System</h1>
				<p align="center" style="font-family: 'Century Gothic', sans-serif;">Type in the code provided by your facilitator. <b>(EX: 902941)</b></h1>
				<p align="center">
					<input type="number" id="CODE" name="CODE" placeholder="Module Code" style="margin-top: 0%; padding: 2% 25% 2% 25%;">
				</p>
				<p align="center">
					<input class="search" type="submit" id="btn" name="btn" value="enter" style="padding: 1% 10% 1% 10%; color: black;">
				</p>
			</form>
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
	else if($_GET['error'] == 2)
	{
		echo '<div class="footer" style="color: #B10000;">
		You must type in a code before accessing that page.
		</div>';
	}
	else 
	{
		echo '<div class="footer" style="color:#B10000;">
		An unkown error has occured.
		</div>';
	}
}
?>

</footer>
</html>