<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<ul>
<li><a href="#home">Hunkers</a></li>
<li><a href="#home" style="padding-bottom: 6px"><waf>Module Distribution System</waf></a></li>
</ul>


<?php	
		if(isset($_POST['btn']))
		{
			$code=$_POST['CODE'];

			if(is_numeric($code))
			{
				if(!is_readable('modules/'.$code.'.html'))
				{
					$error = 1;
					header("refresh:0;url=index.php?error=".$error);
					$_POST['log'] = 0;
				}
				else if(is_readable('modules/'.$code.'.html'))
				{
					$modulepage = file_get_contents('modules/'.$code.'.html');
					echo 'test code page: '.$code.' </br>';
					echo $modulepage;
				}
			} 
			else 
			{
				$error = 1;
				header("refresh:0;url=index.php?error=".$error);
				$_POST['log'] = 0;					
			} 
			
			/*$row=mysqli_fetch_object($result);
			
			if(!$row)
			{
				$error = 1;
				//header("refresh:0;url=index.php?error=".$error);
				$_POST['log'] = 0;
			}
			$imagefile = $row->image;
			$image_src='images/'.$imagefile.'.png';*/

	}
	else
	{
		$error = 2;
		header("refresh:0;url=index.php?error=".$error);
		$_POST['log'] = 0;
	}
?>


<body style="bg-color: #00FF00">
</body>

</html>