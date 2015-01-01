<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Web Design & Development by Studio 24 Ltd -->
<!-- www.studio24.net - (0870) 241 6159 -->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="/wp-content/themes/srj/assets/css/global.css" type="text/css" media="all" />
<link rel="stylesheet" href="/wp-content/themes/srj/assets/css/print.css" type="text/css" media="print" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Syntax Highlighter - See http://www.dreamprojections.com/syntaxhighlighter/ -->
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shCore.js"></script>
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shBrushBash.js"></script>
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shBrushPlain.js"></script>
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shBrushSql.js"></script>
<script type="text/javascript" src="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/shBrushXml.js"></script>
<link type="text/css" rel="stylesheet" href="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/styles/shCore.css"/>
<link type="text/css" rel="stylesheet" href="/wp-content/themes/srj/assets/js/syntaxhighlighter_2/styles/shThemeDefault.css"/>
<script type="text/javascript">
	SyntaxHighlighter.config.clipboardSwf = '/wp-content/themes/srj/assets/js/syntaxhighlighter_2/scripts/clipboard.swf';
	SyntaxHighlighter.all();
</script>

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10517635-1', 'simonrjones.net');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class('two-col'); ?>>
    <p id="skip-link"><a href="#content">Skip to content</a></p>
    <div id="container">

        <div id="header">
            <div id="header-branding">
		       <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		       <p><?php bloginfo('description'); ?></p>
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
        
