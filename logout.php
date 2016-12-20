<?php

//session
session_name('Log');
session_start();

//reset session array
$_SESSION=[];

//destroy session data
session_destroy();


$title='logout';
define('TITLE','LOGOUT');
include('C:\XAMPP\htdocs\solutions\includes\header.php');

?>

<p>You are now logged out!</p>

<?php
include('C:\XAMPP\htdocs\solutions\includes\footer.php');
?>