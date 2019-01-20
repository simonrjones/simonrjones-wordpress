<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" profile="http://gmpg.org/xfn/11">
<head>
	<meta http-equiv="Content-Type" content="UTF-8" />
	<title>srj24 - Twitter and a lot of Ls</title>
	<style>
	  body { background-color: #EEE; font: 1em Arial, sans-serif; }
	  #container { width: 80%; background-color: #FFF; margin: 0 auto; padding: 8px; }
	  #content pre { height: 3em; border: 1px sold; background-color: #EEE; overflow: auto; }
	  #twitter { width: 75%; height: 1.4em; font-size: 0.8em; }
	</style>
</head>
<body>
<div id="container">
<div id="content">

<h1>Twitter and a lot of Ls</h1>

<?php

/*
#L Lilly let me loll in hilly Ludlow/Llwydlo till all dull loyal leeks legally roll all ill lillypillies to Lille, Llanelly and Llullaillaco
#L Lala Lilly pulls ill llamas all lolling lamely. Legally Lloyd lolls on all rolling lilo bells. Lolly ball pills well fill Bill in Lille
#L Lala Lilly pulls ill llamas all lolling lamely. Legally Lloyd lolls on all rolling lilo bells. Lolly ball pills well fill Bill in Lille
*/

//lies laconically living literally on a lilo ball in Lille
//roll pull well lolly alley allot allow toll fill ball bell bull legally

if (isset($_POST['twitter']) && (!empty($_POST['twitter']))) {
    
    $raw_twitter = $_POST['twitter'];
    $numberOfLs = 0;
    $foundHashL = false;
    $found140Chars = false;
    $found50Ls = false;
    $postLength = strlen($raw_twitter);

    // Strip #L
    if (strpos($raw_twitter, '#L') !== false) {
        $foundHashL = true;
    } 
    $twitter = str_replace('#L', '', $raw_twitter);

    for ($x=0;$x<strlen($twitter);$x++) {
        if (strtolower(substr($twitter, $x,1)) == 'l') {
            $numberOfLs++;
        }
    }

print "<h2>Your message</h2>\n";
print "<pre>".strip_tags($raw_twitter)."</pre>\n";
print "<p>Your Twitter post has $postLength characters in it and has $numberOfLs Ls in it.</p>\n<p>";
if ($postLength > 140) {
    print "The post is too long at over 140 characters, ";
} else {
    $found140Chars = true;
    print "The post is 140 characters or under, ";
}
if ($numberOfLs == 50) {
    $found50Ls = true;
    print "you have exactly 50 Ls, ";
} else {
    print "your post doesn't have 50 Ls, ";
}
print ($foundHashL) ? " and you included the #L hashtag." : " and you've missed the #L hashtag.";
print "</p>\n";

print ($foundHashL && $found140Chars && $found50Ls) ? "<p>Your entry is valid, hurrah!</p>" : "<p>Your entry isn't good enough, try again!</p>";

}

?>

<h2>Try again</h2>

<form action="twitter_fry.php" method="post">

<label for="twitter">Your Twitter</label>

<input type="text" name="twitter" id="twitter" value="<?php echo strip_tags($raw_twitter); ?>" /> <br />

<input type="submit" name="submit" value="Test your entry" />

</form>

<p><a href="/2009/01/23/laconic-llamas/">Back to blog posting: Laconic Llamas</a></p>

</div> 
</div>
</body>
</html>