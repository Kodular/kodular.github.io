<?php
// Minify
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
?>

	<meta charset="utf-8" />
	<meta name="theme-color" content="#673ab7">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	<link href="/assets/css/materialize.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
	<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="/assets/js/materialize.min.js" type="text/javascript"></script>
	<script src="/assets/js/fontawesome.js" type="text/javascript"></script>
	<script src="/assets/js/mobile-nav.js" type="text/javascript"></script>

	<script type='application/ld+json'>
	{
	  "@context": "http://www.schema.org",
	  "@type": "WebSite",
	  "name": "Makeroid",
	  "alternateName": "Makeroid App Builder",
	  "url": "https://www.makeroid.tk"
	}
	</script>

	<meta name="description" content="A new era of app building">

	<meta property="og:title" content="Makeroid App Builder" />
	<meta property="og:description" content="A new era of app building" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.makeroid.tk" />
	<meta property="og:image" content="https://www.makeroid.tk/assets/logo.png" />
  </head>

	<body>
<?php include_once("config/analyticstracking.php") ?>
	<div class="navbar-fixed">
	<nav>
	  <div class="nav-wrapper deep-purple">
		<a href="/home" class="brand-logo title">&nbsp;&nbsp;Makeroid</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/home") !== false ) { echo " class=\"active\""; }?>><a href="/home">Home</a></li>
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/docs") !== false ) { echo " class=\"active\""; }?>><a href="/docs">Docs</a></li>
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/team") !== false ) { echo " class=\"active\""; }?>><a href="/team">Team</a></li>
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/about") !== false ) { echo " class=\"active\""; }?>><a href="/about">About</a></li>
		  <li><a target="_blank" href="https://community.makeroid.tk/">Community</a></li>
		  <li><a class="waves-effect waves-dark btn pink accent-2" href="https://builder.makeroid.tk">Login</a></a></li>
		</ul>
	  </div>
	</nav>
	</div>
	<ul class="side-nav" id="mobile-demo">
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/home") !== false ) { echo " class=\"active\""; }?>><a href="/home">Home</a></li>
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/docs") !== false ) { echo " class=\"active\""; }?>><a href="/docs">Docs</a></li>
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/team") !== false ) { echo " class=\"active\""; }?>><a href="/team">Team</a></li>
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/about") !== false ) { echo " class=\"active\""; }?>><a href="/about">About</a></li>
	  <li><a target="_blank" href="https://community.makeroid.tk/">Community</a></li>
	  <li><a class="waves-effect waves-dark btn  pink accent-2" href="https://builder.makeroid.tk">Login</a></a></li>
	</ul>

<?php include_once("config/ads.php"); ?>
