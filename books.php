<?php
 $title = 'BOOKS';
    define('TITLE', 'Books by JD');//Constant value must run before loading inside file for the title to change. If header.php file is //loaded first, TITLE will not change.

include('C:\XAMPP\htdocs\solutions\includes\header.php');

//blank section for html
?>
<h2>J.D. Salinger's Books</h2>
<ul>
<li>The Catcher in the Rye</li>
    <li>Nine Stories</li>
    <li>Franny and Zooey</li>
    <li>Raise High the Room Beam...</li>
</ul>
<?php
include('C:\XAMPP\htdocs\solutions\includes\footer.php');
?>