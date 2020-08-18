

<html>
<head>
<title>Form Validation with PHP - Dewa Coding 21</title>
<link href='https://fonts.googleapis.com/css?family=Raleway|Lato' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet">
</head>
<body>
<?php
  $nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
$messageError ="";
 
$iconSuccess ="";
 
if(isset($_POST['submit'])){
 if (empty($_POST["name"])) {
  $nameError = "* Name is required";
  $iconError = "<img src='img/warning.png' style='margin-left: 10px; width: 20px;'>";
 } else {
  $name = test_input($_POST["name"]);
  
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
   $nameError = "* Only letters and white space allowed";
   $iconError = "<img src='img/warning.png' style='margin-left: 10px; width: 20px;'>";
  }
 }
  
 if (empty($_POST["email"])) {
  $emailError = "* Email is required";
  $iconError = "<img src='img/warning.png' style='margin-left: 10px; width: 20px;'>";
 } else {
  $email = test_input($_POST["email"]);
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
   $emailError = "* Invalid email format";
   $iconError = "<img src='img/warning.png' style='margin-left: 10px; width: 20px;'>";
  }
 }
  
 if (empty($_POST["website"])) {
  $website = "";
  $websiteError = "* Website is required";
 } else {
  $website = test_input($_POST["website"]);
  
  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
   $websiteError = "* Invalid URL";
   $iconError = "<img src='img/warning.png' style='margin-left: 10px; width: 20px;'>";
  }
 }
  
 if (empty($_POST["message"])) {
  $messageError = "* Message is required";
  $iconError = "<img src='img/warning.png' style='margin-left: 10px; width: 20px;'>";
 } else {
  $message = test_input($_POST["message"]);
 }
  
 if (empty($_POST["gender"])) {
  $genderError = "* Gender is required";
  $iconError = "<img src='img/warning.png' style='margin-left: 10px; width: 20px;'>";
 } else {
  $gender = test_input($_POST["gender"]);
 }
}
 
function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>
<div class='form'>
<h2>Form Validation with PHP</h2>
<form action="" method="post">
<div class='form-group'><br>
<div class='label'>
Name <span class='red'>*</span>
</div>

<div class='input'>
<input class="input" name="name" type="text" value=""><?php echo $iconError; ?><?php echo $iconSuccess; ?>
</div>
<span class="error"><?php echo $nameError;?></span>
</div>

<div class='form-group'>
<div class='label'>
E-mail <span class='red'>*</span>
</div>

<div class='input'>
<input class="input" name="email" type="text" value=""><?php echo $iconError; ?>
</div>
<span class="error"><?php echo $emailError;?></span>
</div>

<div class='form-group'>
<div class='label'>
Gender <span class='red'>*</span>
</div>

<input class="radio" name="gender" type="radio" value="female">Female
<input class="radio" name="gender" type="radio" value="male">Male<?php echo $iconError; ?><br>
<span class="error"><?php echo $genderError;?></span>
</div>

<div class='form-group'>
<div class='label'>
Website <span class='red'>*</span>
</div>

<div class='input'>
<input class="input" name="website" type="text" value=""><?php echo $iconError; ?>
</div>
<span class="error"><?php echo $websiteError;?></span>
</div>

<div class='form-group'>
<div class='label'>
Message <span class='red'>*</span>
</div>

<div class='input'>
<textarea cols="40" name="message" rows="5"></textarea><?php echo $iconError; ?>
</div>
<span class="error"><?php echo $messageError;?></span>
</div>

<input class="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</body>
</html>