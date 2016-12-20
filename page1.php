<!doctype html>
<html lang="en">
<head>
	<title>PAGE 1 TEMPLATE</title>
	<meta charset="utf-8">
    <style>
	@import url("1.css");
           </style>
</head>
<body>
<div id="wrapper">
    
	
    <?php
    $title = 'Page 1';
    define('TITLE', 'Page One');
        include('C:\XAMPP\htdocs\solutions\includes\header.php');
        ?>
	<!-- header -->
	
	<aside id="sidebar">
		<h2>Favorite Quotes</h2>
			<p class="news">I don't exactly know what I mean by that, but I mean it.<br>- <em>The Catcher in the Rye</em></p>
			<p class="news">I privately say to you, old friend... please accept from me this unpretentious bouquet of early-blooming parentheses: (((()))).<br>- <em>Raise High the Roof Beam, Carpenters and Seymour: An Introduction</em></p>
	</aside><!-- sidebar -->

	<section id="content">
    	<article>
 		<!-- BEGIN CHANGEABLE CONTENT. -->
		<h2>Welcome to a J.D. Salinger Fan Club</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h2>Another Header</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<!-- END CHANGEABLE CONTENT. -->
	    </article>
    </section><!-- content -->

	
        <?php
        include('C:\XAMPP\htdocs\solutions\includes\footer.php');
        ?>
</div><!-- wrapper -->
</body>
</html>