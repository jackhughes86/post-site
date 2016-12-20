<!doctype html>
<html lang="en">

    <head>
    <meta charset="utf-8">
        <title>Forum Posting</title>
    </head>
    
    
    <body>
    <!--script 5.2
handle_post.php
Keith Lemongello
--->
    <?php
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $posting =nl2br(strip_tags($_POST['posting']));
        
        $name = $first_name .' '. $last_name;
        
        $words = str_word_count($posting);
        
        $posting = str_ireplace('badword','XXXXX',$posting);
        
        print"<div>Thank you, $name, for your posting:
        <p>$posting...</p>
        <p>($words words)</p></div>";
        
        $name = urlencode($name);
        $email = urlencode($_POST['email']);
        
        print'<p>Click <a href="thanks.php?name='.$name. '&email='.$email.'"> here</a> to continue</p>';
        ?>
        ?>
        <pre>
        <?php print_r($_POST); ?>
        </pre>
    </body>
</html>