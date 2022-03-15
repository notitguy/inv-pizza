<?php 
	date_default_timezone_set('Europe/Prague');
	$today = date("F j, Y, g:i a");

	if(isset($_POST['name'])){

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

		$date = Clean($_POST['date']); + 
		$time = Clean($_POST['time']);+
		$number = Clean($_POST['number']);+
		$name = Clean($_POST['name']);
		$last_name = Clean($_POST['last_name']);
		$fullnamee = $name." ".$last_name;
		$phone = Clean($_POST['phone']);
		$email = Clean($_POST['email']);
		$occasion = Clean($_POST['occasion']);
		$request = Clean($_POST['request']);

		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8";
	

		$subject = "Appeal from the site " . $today;
		$to = "erkinoov20@gmail.com"; // Mail adress
		$message = 'Date: '.$date.'<br>'.'Time: '.$time.'<br>'.'Number of people: '.$number.'<br>'.'Full name: '.$fullnamee.'<br>'.'Phone: '.$phone.'<br>'.'Email: '.$email.'<br>'.'Occasion: '.$occasion.'<br>'.'Special request: '.$request;
		$success =  mail($to, $subject, $message, $headers);

		if ($success) {
			echo "success!";
		}else{
			echo "error!";
		}

	}else{
		header("Location: index");
	}

?>
