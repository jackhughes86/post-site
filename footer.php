<footer>
        <p>Template design by <a href="http://www.websmartr.com">WebSmartr</a>.<br>&copy;
            <?php
            //start year and current year
            $startYear = 2011;
            $thisYear = date('Y');
            if ($startYear == $thisYear) {
                echo $startYear;
            } else {
                echo "{$startYear} &#8211; {$thisYear}";
            }
            ?>
            <br>
            <?php
            date_default_timezone_set('America/Los_Angeles');
            
            print date('g: i a l F j');
            ob_end_flush();
        ?>
        </p>
		
	</footer><!-- footer -->