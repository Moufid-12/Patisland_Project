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
	$headers = "Reply-To:$from\n";
	$headers = "Content-Type:text/html; charset=\"iso-8859-1\"";

	if (mail($to, $subject, $message, $headers)) {
		$alertMessage = "Ceci est un message d'alerte généré par PHP.";
		
	}else {
		$alertMessage = "Error.";
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