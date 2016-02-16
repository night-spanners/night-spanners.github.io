<?php
// $field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
// $field_message = $_POST['cf_message'];

$mail_to = 'night.spanners@gmail.com';
$subject = 'Message from a site visitor '.;

// $body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
// $body_message .= 'Message: '.$field_message;


$mail_status = mail($mail_to, $subject, $body_message);
// $mail_status = mail($mail_to, $subject, $body_message)



if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert("Thanks for your interest! We'll talk soon.");
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Oops, something went wrong!');
		window.location = 'index.html';
	</script>
<?php
}
?>