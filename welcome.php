<?php
session_name('Log');
session_start();

$title='Welcome';
define('TITLE','Welcome Page');
include('C:\XAMPP\htdocs\solutions\includes\header.php');
//greeting
print '<p>Hello,'.$_SESSION['email'].'!</p>';

//print time of logged in
print '<p>You in been logged in since: '.date('g:i a',$_SESSION['loggedin']).'</p>';

//logout link
print '<p><a href="logout.php">Logout</a></p>';

include('C:\XAMPP\htdocs\solutions\includes\footer.php');?>