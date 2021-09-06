<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>NETTUTS > Sign up</title>
    <link href="css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div -->
    <div id="header">
        <h3>NETTUTS > Sign up</h3>
    </div>
    <!-- end header div -->  
      
    <!-- start wrap div -->  
    <div id="wrap">
          
        <!-- start php code -->
        <!-- start PHP code -->
<?php
// Establish database connection

mysql_connect("localhost", "username", "password") or die(mysql_error()); // Connect to database server(localhost) with username and password.
mysql_select_db("registrations") or die(mysql_error()); // Select registrations database.
          <!-- start PHP code -->
<?php
  
  if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email'])){
      // Form Submited
  }
  
  if(  ){ // If statement is true run code between brackets
  
  }
    
  isset($_POST['name']) // Is the name field being posted; it does not matter whether it's empty or filled.
  && // This is the same as the AND in our statement; it allows you to check multiple statements.
  !empty($_POST['name']) // Verify if the field name is not empty
    
  isset($_POST['email']) // Is the email field being posted; it does not matter if it's empty or filled.
  && // This is the same as the AND in our statement; it allows you to check multiple statements.
  !empty($_POST['email']) // Verify if the field email is not empty

  if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email'])){
    $name = mysql_escape_string($_POST['name']); // Turn our post into a local variable
    $email = mysql_escape_string($_POST['email']); // Turn our post into a local variable
}

$name = mysql_escape_string($_POST['name']);
$email = mysql_escape_string($_POST['email']);             
              
if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    // Return Error - Invalid Email
}else{
    // Return Success - Valid Email
    // Return Success - Valid Email
$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';

$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
// Example output: f4552671f8909587cf485ea990207f3b

$password = rand(1000,5000); // Generate random number between 1000 and 5000 and assign it to a local variable.
// Example output: 4568

mysql_query("INSERT INTO users (username, password, email, hash) VALUES(
    '". mysql_escape_string($name) ."', 
    '". mysql_escape_string(password_hash($password)) ."', 
    '". mysql_escape_string($email) ."', 
    '". mysql_escape_string($hash) ."') ") or die(mysql_error());
}

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
  
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
------------------------
Username: '.$name.'
Password: '.$password.'
------------------------
  
Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
  
'; // Our message above including the link
                      
$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
}else{
    // Invalid approach
}

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
}
$search = mysql_query("SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
$match  = mysql_num_rows($search);

$search = mysql_query("SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
$match  = mysql_num_rows($search);
  
echo $match; // Display how many matches have been found -> remove this when done with testing ;)

if($match > 0){
    // We have a match, activate the account
}else{
    // No match -> invalid url or account has already been activated.
}

// We have a match, activate the account
mysql_query("UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
echo '<div class="statusmsg">Your account has been activated, you can now login</div>';

if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    // Return Error - Invalid Email
    $msg = 'The email you have entered is invalid, please try again.';
}else{
    // Return Success - Valid Email
    $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
}


            
?>

<!-- stop PHP Code -->
        <!-- stop php code -->
      
        <!-- title and description -->   
        <h3>Signup Form</h3>
        <p>Please enter your name and email addres to create your account</p>

        <?php 
    if(isset($msg)){  // Check if $msg is not empty
        echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
    } 
?>
      
          
        <!-- start sign up form -->  
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="" />
            <label for="email">Email:</label>
            <input type="text" name="email" value="" />
              
            <input type="submit" class="submit_button" value="Sign up" />
        </form>
        <!-- end sign up form -->
          
    </div>
    <!-- end wrap div -->
</body>
</html>