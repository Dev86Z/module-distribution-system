<?php
	if(isset($_POST['email']) || isset($_POST['content']))
	{
		$error = 1;
		header("refresh:0;url=create.php?error=".$error);		
	}

	$code = rand(656565, 999999);

	FileInit($code, $_POST['content'], $_POST['email']);

	function FileInit($filename, $content, $email)
	{
		if(file_exists($filename))
		{
			FileInit($filename, $content);
		}
		$file1 = fopen("modules/".$filename.".html", "w");
		$file2 = fopen("modules/".$filename.".php", "w");

		fwrite($file1, $content);
		fwrite($file2, ' $email = '.$email.';'."\n".' $code = '.$filename.';');
	}
?>