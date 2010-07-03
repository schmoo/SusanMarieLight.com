<?php $section = Array( 3 ); ?>
<?php require "_htmlBegin.php"; ?>

<?php

$regex = "/^([a-z0-9_\.\-])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,4})+$/i";
$to = "susanmlight@gmail.com";
$attempt = !empty( $_POST );
if( $attempt ) { foreach( $_POST as $key => $value) { $$key = $value; } }
$from_header = "From: $from";

if( $from != "" &&
preg_match( $regex, $from ) &&
$subj != "" &&
$body != "" ) {
	mail( $to, $subj, $body, $from_header );
	$success = 1;
	foreach( $_POST as $key => $value ) { $$key = ""; }
}
else { $success = ""; }

?>

<h3>Contact Me</h3>
<p>In my attempt to reduce the amount of SPAM I receive in the future I am providing this contact form in lieu of my email address as a means of getting information to me.</p>

<?php

if( $attempt ) {
	$message = "Thank you; your message has been sent.";
	if( !$success ) { $message = "I'm sorry; there seemed to be an error in your message submission. Please verify that: your email address is properly formatted, your gave a subject for the message, and that the body of the message is not empty."; }

?>
<div class="simpleBox sBoxGreen">
	<p><?php echo $message; ?></p>
</div>
<?php } ?>

<form id="contactForm" action="contact.php" class="styled" method="post">

	<div class="suggest">* Denotes a required field</div>
	
	<div class="formRow">
		<label class="format">From (email): *</label>
		<input class="input box validate-ne" type="text" name="from" title="sender's email address" value="" />
	</div>
	
	<div class="formRow">
		<label class="format">Subject: *</label>
		<input class="input box validate-n" type="text" name="subj" title="subject of the email" value="" />
	</div>
	
	<div class="formRow">
		<label class="format">Body: *</label>
		<textarea class="input box validate-n" name="body" title="body/content of the email" cols="35" rows="10"></textarea>
	</div>
	
	<div class="ohTheHumanity ">
		<label class="format">Leave this blank:</label>
		<input class="input box validate-0" type="text" name="validForm" title="non-human input field" />
	</div>
	
	<div class="suggest submit">
		<input class="button" type="submit" value="Submit" title="submit the form for sending" />
	</div>

</form>
<script type="text/javascript">$( "contactForm" ).onsubmit = 'validateForm';</script>

<?php require "_htmlEnd.php"; ?>