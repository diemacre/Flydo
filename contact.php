<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
date_default_timezone_set("Europe/Paris");
$fecha_hora_actual = date('Y-m-d H:i:s');

$mail_to = 'flydo16@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
    <?php
    $link = mysqli_connect("host", "user", "pass");
    mysqli_select_db($link, "dbname");
    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente
    mysqli_query($link, "INSERT INTO cf VALUES ('','$fecha_hora_actual','{$_POST['cf_name']}','{$_POST['cf_email']}','{$_POST['cf_message']}')");
    mysqli_close($link); // Cerramos la conexion con la base de datos
    echo 'Los datos han sido insertados en la base de datos';
     ?>

	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to flydo16@gmail.com');
		window.location = 'index.php';
	</script>
<?php
}
?>
