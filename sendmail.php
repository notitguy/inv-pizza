<?php 
	
	date_default_timezone_set('Europe/Prague');
	$today = date("F j, Y, g:i a");
	// var_dump($_POST);

	function Clean($text)
	{
		$text = trim($text);
		$text = stripslashes($text);
		$text = htmlspecialchars($text);
		$text = strip_tags($text);

		$text = str_replace("'", "`", $text);

		return $text;
	}

		$email = Clean($_POST['email']);
		$name = Clean($_POST['name']);
		$phone = Clean($_POST['phone']);
		$messagefild = Clean($_POST['message']);

		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8";
	

		$subject = "Appeal from the site " . $today;
		$to = "1erkinoov20@gmail.com";
		$message = 'Name: '.$name.'<br>'.'Phone: '.$phone.'<br>'.'Email: '.$email.'<br>'.'Message:'.$messagefild;
		$success =  mail($to, $subject, $message, $headers);

		if ($success) {
			echo "success";
		}else{
			echo "";
		}



?>
