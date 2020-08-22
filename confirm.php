<?php
	if(isset($_POST['btn']))
	{
		$code=$_POST['CODE'];

		if(is_numeric($code))
		{
			if(!is_readable('modules/'.$code.'.html'))
			{
				$error = 1;
				header("refresh:0;url=submit.php?error=".$error);
				$_POST['log'] = 0;
			}
			else if(is_readable('modules/'.$code.'.html'))
			{
				$mail = @mail("dev86.sean@gmail.com", "test", "testerino lololol"); 
				echo 'test2';
			}
		} 
		else 
		{
			$error = 1;
			header("refresh:0;url=submit.php?error=".$error);
			$_POST['log'] = 0;					
		} 
	}

?>