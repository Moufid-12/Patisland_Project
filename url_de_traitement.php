	<?php
	if (isset($_POST['submit']) ) {
	extract($_POST);

	if (!empty($name) and !empty($email) and !empty($subject) and !empty($message)) {

		$to = "mfiddaoud771@gmail.com";

		$name = htmlspecialchars(htmlentities(trim($name)));
		$email = htmlspecialchars(htmlentities(trim($email)));
		$subject = htmlspecialchars(htmlentities(trim($subject)));
		$message = htmlspecialchars(htmlentities(trim($message)));
		
		$from =  $email;

		$headers = "From:\"$name\"<$from>\n";
		$headers .= "Reply-To:$from\n";
		$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"";

		if (mail($to, $subject, $message, $headers)) {
			echo '<h6 class="sub-title" style="color: green;">'.$email+'</h6>';
			
		}else {
			echo '<h6 class="sub-title" style="color: green;"> Eurreur</h6>';
			$alertMessage = "Donnée non envoyé";
			
		}
	}
	}
	?>

	<?php

	?>

	<script>
		// Code JavaScript généré par PHP
		var alertMessage = "<?php echo $alertMessage; ?>";
		alert(alertMessage);
	</script>