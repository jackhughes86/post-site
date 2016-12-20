<?php
ob_start();

$title='Post';
define('TITLE', 'Posting');
include('C:\XAMPP\htdocs\solutions\includes\header.php');

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
        $_POST = [];
    }
    
     else {// forgot a field
        print '<p lass="test--error">Please try again!</p>';
    }
} 


?>

    <body>
    <!-- script 5.1 posting.php
        Keith Lemongello
This file is posting data
--><div>
        <fieldset>
        <legend>Please complete this form to submit your posting:</legend>
            <form action="handle_post.php" method="post">
                
               <p><label for="first_name">First Name:</label><input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) {print htmlspecialchars($_POST['first_name']);}?>"></p>

                <p><label for="last_name">Last Name:</label><input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) {print htmlspecialchars($_POST['last_name']);}?>"></p>

                <p><label for="email">Email:</label><input type="email" name="email" size="20" value="<?php if (isset($_POST['email'])) {print htmlspecialchars($_POST['email']);}?>"></p> 
                   
                <p>Posting:
                <textarea name="posting" rows="9" cols="30" required></textarea>
                </p>
                <input type="submit" name="submit" value="Send">
            </form>
        </fieldset>
        
        </div>
    </body>
<?php
include('C:\XAMPP\htdocs\solutions\includes\footer.php');
?>