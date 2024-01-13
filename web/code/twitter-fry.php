<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Web Design & Development by Studio 24 Ltd -->
<!-- www.studio24.net - (0870) 241 6159 -->
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Fry Twitter - simon r jones</title>

<link rel="stylesheet" href="/wp-content/themes/srj/assets/css/global.css" type="text/css" media="all" />
<link rel="stylesheet" href="/wp-content/themes/srj/assets/css/print.css" type="text/css" media="print" />

<link rel="alternate" type="application/rss+xml" title="simon r jones &raquo; Feed" href="http://feeds.feedburner.com/simonrjones" />
</head>
<body class="home blog logged-in two-col">
    <p id="skip-link"><a href="#content">Skip to content</a></p>
    <div id="container">

        <div id="header">
            <div id="header-branding">
		       <h1><a href="http://www.simonrjones.net/">simon r jones</a></h1>
		       <p>thoughts and wanderings on the interweb</p>
            </div>
            <form method="get" id="header-search" action="/index.php" >
	           <div>
	               <label for="s" class="screen-reader-text">Search for:</label>
	               <input type="text" value="" name="s" id="s" />
	               <input type="submit" id="searchsubmit" value="search" />
	           </div>
	       </form>		
	   </div>
	   
	   <ul id="nav-primary">
	       <li><a href="/">home</a></li>
	       <li><a href="/code/">code</a></li>
           <li><a href="http://www.studio24.net/">studio 24</a></li>
	   </ul>
	   
       <div id="content">
        

	<div id="content-primary">

        <h1>Fry Twitter</h1>
        
<?php
if (isset($_POST['twitter']) && (!empty($_POST['twitter']))) {
    
    $raw_twitter = filter_var($_POST['twitter'], FILTER_SANITIZE_STRING);
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

<form action="twitter-fry.php" method="post" class="simple-form">
<fieldset>
<div><label for="twitter">Your Twitter:</label>
<input type="text" name="twitter" id="twitter" value=""/></div>
<div><input type="submit" name="submit" class="submit" value="Test your entry" /></div>
</fieldset></form>


<p>See blog post: <a href="/2009/01/laconic-llamas/">Laconic Llamas</a></p>


    </div><!-- div#content-primary ends -->



	<div id="content-secondary">
		<ul>
 
				
			<li><h2>code</h2>
			 <p>Links to various code experiments will appear here as and when they're ready</p>
			</li>

		</ul>
	</div>


    </div><!-- div#content ends -->
	
    <div id="site-info">
        <p>&copy; Simon R Jones 2005-2009, <a href="http://feeds.feedburner.com/simonrjones">Entries (RSS)</a>, 
		Contact me on <span class="email">simon&#64;studio24.net</span>, <a href="http://twitter.com/simonrjones">Twitter</a>, <a href="http://linkedin.com/in/simonrjones">Linkedin</a> <p>This website looks best in a browser</p>
    </div>
	
	</div><!-- div#container ends -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/srj/assets/js/global.js"></script>
    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    try {
    var pageTracker = _gat._getTracker("UA-10517635-1");
    pageTracker._trackPageview();
    } catch(err) {}</script>
</body>
</html>