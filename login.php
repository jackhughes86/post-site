<?php
$title='Log In';
define ('TITLE', 'Login');
include('C:\XAMPP\htdocs\solutions\includes\header.php');

//intro text
echo '<h2>Login Form</h2>
<p>Users who are logged in can take full advantage of their personal account.</p>';
    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        //handle the form:
        if ((!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
            
            if ((strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass'))  {
                //correct
                
                //session
                session_name('Log');
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['loggedin'] = time();                
            
                //redirect
                ob_end_clean();
                header('Location: welcome.php');
                exit();
            } else {
                //incorrect
                echo '<p>The submitted email address and password do not match those on file!<br>';
                echo '<a href="login.php">Go back and try again!</a></p>';
            }
            
        } else {//forgot a field
        echo '<p>Please make sure you enter both an email address and a password!<br>';
        echo '<a href="login.php">Go back and try again!</a></p>';
        }
        
    } else {
        print '<form action="login.php" method="post">

    <table>
    <tr>
        <th><label for="email">Email Address:</label></th>
        <td><input type="email" name="email" size="20"></td>
        </tr>
        
        <tr>
            <th><label for="password">Password:</label></th>
            <td><input type="password" name="password" size="20"></td>
        </tr>
    </table>
    
    <p><input type="submit" name="submit" value="Log In!"></p>
    
</form>';
    }
    

?>

<?php
include('C:\XAMPP\htdocs\solutions\includes\footer.php');
?>