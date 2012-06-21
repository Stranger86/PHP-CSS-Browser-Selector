<?php require("bs.php"); ?><!DOCTYPE html>
<html class="<?php echo css_browser_selector() ?>">
<head>
<title>PHP CSS Browser Selector Example</title>
<style type='text/css'>
	.box { margin: 0 0 10px 0; height: 100px; width: 100px; }
	
	/* CSS below provides examples of how to use selectors */
	.ie .box { background: red; }
	.ff .box { background: blue; }
	.chrome .box { background: green; }
	.safari .box { background: orange; }
	.opera .box { background: cyan; }
	
	
	span { padding: 5px; color: #fff; width: 300px; }
</style>
</head>
<body>
	<h1>PHP CSS Browser Selector Example</h1>
	<p>To use the PHP CSS Browser Selector, do this:</p>
	<ol>
		<li>Put <b>bs.php</b> in a directory on your server.</li>
		<li>Put the <b>code into your head</b>. Open this .php file in your favorite text editor to see how. (Don't have the .php file? <a href="https://github.com/colorcrate/PHP-CSS-Browser-Selector">Fork it on GitHub.</a>)</li>
		<li>???</li>
		<li><b>Enjoy</b> using browser-specific CSS selectors!</li>
	</ol>
	<p>The box below will change colors depending on what browser you're on.</p>
	<div class="box"></div>
	<span style="background: red;">Internet Explorer is red.</span>
	<span style="background: blue;">Firefox is blue.</span>
	<span style="background: green;">Chrome is green.</span>
	<span style="background: orange;">Safari is orange.</span>
	<span style="background: cyan;">Opera is <s>silly</s> cyan.</span>
</body>
</html>