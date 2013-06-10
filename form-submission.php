<?php

// SUGGESTED FORM RESOURCES
//--------------------------
// - http://rosstanner.co.uk/2012/11/build-simple-contact-form-html-php-bootstrap/
// - http://alittlecode.com/jquery-form-validation-with-styles-from-twitter-bootstrap/
// - http://davidwalsh.name/password-protect-directory-using-htaccess
// - http://www.limelightonline.co.nz/blog/create-dynamic-pdf-with-php-tutorial/



// check for form submission - if there is no submission redirect back to the form
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: form.php"); exit;
}
	
// get the posted data, and save as variables
$today_date = date('m/d/Y');

$name = $_POST["name"];
$email = $_POST["email"];

$option_a = $_POST["option_a"];
$option_b = $_POST["option_b"];
$option_c = $_POST["option_c"];


//recipients
$ron = $_POST["ron"];
$brian = $_POST["brian"];
$champ = $_POST["champ"];
$brick = $_POST["brick"];



// check that a job name was entered  
if (empty($name))  {
    $error = "Please enter a your name.";
} 
// check for a valid email address  
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))  
	$error = "You must enter a valid email address.";  

// check if an error was found - if there was, send the user back to the form  
if (isset($error)) {  
    header("Location: form.php?e=".urlencode($error)); exit;  
}  




		
// write the email content
$email_content .= "Send Date: $today_date\n";

$email_content = "Name: $name\n";
$email_content .= "email: $email\n";

if ($option_a==!null) {
$email_content .= "Option A: $option_a\n";
}
if ($option_b==!null) {
$email_content .= "Option B: $option_b\n";
}
if ($option_c==!null) {
$email_content .= "Option C: $option_c\n";
}
if ($message==!null) {
$email_content .= "Message: \n$message\n";
}




// where to send the email
// mail ("email address", subject, content);
if ($ron==!null) {
	mail ("ron@example.com", $name, $email_content);
}
if ($elena==!null) {
	mail ("brian@example.com", $name, $email_content);
}
if ($jamie==!null) {
	mail ("champ@example.com", $name, $email_content);
}
if ($jamie==!null) {
	mail ("brick@example.com", $name, $email_content);
}

	
// send the user back to the form
header("Location: form.php?s=".urlencode("Job Order Submitted.")); exit;

?>
