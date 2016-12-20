
<?php

$title='Register';
define('TITLE', 'REGISTER');
include('C:\XAMPP\htdocs\solutions\includes\header.php');


print '<h2>Registration Form</h2>
<p>Register so that you can take advantage of cetain features!</p>';


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $problem = false;//no problems
    
    //check for each value
    if(empty($_POST['first_name'])) {
        $problem = true;
        print '<p class="text--error">Please enter your first name!</p>';
    }
    if(empty($_POST['last_name'])){
        $problem = true;
        print '<p class="text--error">Please enter your last name!</p>';
    }
    if(empty($_POST['email']) ||
      (substr_count($_POST['email'],'@')!=1)) {
        $problem = true;
        print '<p class="text--error">Please enter your email!</p>';
    }
    if(empty($_POST['password1'])) {
        $problem = true;
        print '<p class="text--error">Please enter a password!</p>';
    }
    if($_POST['password1'] !=$_POST['password2']) {
        $problem = true;
        print '<p class="text--error">Your password did not match your confirmed password!</p>';
    }
    if (!$problem) {//if no problems
        
        print '<p class="text--success">You are now registered!<br>Okay, you are not really registered</p>';
        //clear posted values
        
        //send email
        $body = "Thank you, {$_POST['first_name']}, for registering with JD Salinger fan club!'.";
        mail($_POST['email'],'Registration Complete', $body, 'From: admin@websmartr.com');
        
        
        $_POST = [];
        
    } else {// forgot a field
        print '<p lass="test--error">Please try again!</p>';
    }
} //end of form
//create form


?>
<form action="register.php" method="post" class="form--inline">
<p><label for="first_name">First Name:</label><input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) {print htmlspecialchars($_POST['first_name']);}?>"></p>

<p><label for="last_name">Last Name:</label><input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) {print htmlspecialchars($_POST['last_name']);}?>"></p>

<p><label for="email">Email:</label><input type="email" name="email" size="20" value="<?php if (isset($_POST['email'])) {print htmlspecialchars($_POST['email']);}?>"></p>

<p><label for="password1">Password:</label><input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) {print htmlspecialchars($_POST['password1']);}?>"></p><p><label for="password2">Confirm Password:</label><input type="password" name="password2" size="20" value="<?php if (isset($_POST['password2'])) {print htmlspecialchars($_POST['password2']);}?>"></p>

<p><input type="submit" name="submit" value="Register!" class="button--pill"></p>
</form>

<?php
include('C:\XAMPP\htdocs\solutions\includes\footer.php');

?>