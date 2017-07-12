
	<meta name="theme-color" content="#2196f3">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link href="/css/materialize.min.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
	
	<script src="/js/jquery.min.js" type="text/javascript"></script>
	<script src="/js/materialize.min.js" type="text/javascript"></script>
	<script src="/js/fontawesome.js" type="text/javascript"></script>
	<script src="/js/mobile-nav.js" type="text/javascript"></script>
  </head>

  <body>

<?php include_once("config/analyticstracking.php") ?>
	
	<div class="navbar-fixed">
	<nav>
	  <div class="nav-wrapper blue">
		<a href="/home" class="brand-logo title">&nbsp;&nbsp;Makeroid</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/home") !== false ) { echo " class=\"active\""; }?>><a href="/home">Home</a></li>
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/about") !== false ) { echo " class=\"active\""; }?>><a href="/about">About</a></li>
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/docs") !== false ) { echo " class=\"active\""; }?>><a href="/docs">Docs</a></li>
		  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/team") !== false ) { echo " class=\"active\""; }?>><a href="/team">Team</a></li>
		  <li><a href="https://community.makeroid.tk/">Community</a></li>
		  <li><a class="waves-effect waves-dark btn amber" href="#">Login</a></a></li>
		</ul>
	  </div>
	</nav>
	</div>
	<ul class="side-nav" id="mobile-demo">
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/home") !== false ) { echo " class=\"active\""; }?>><a href="/home">Home</a></li>
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/about") !== false ) { echo " class=\"active\""; }?>><a href="/about">About</a></li>
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/docs") !== false ) { echo " class=\"active\""; }?>><a href="/docs">Docs</a></li>
	  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/team") !== false ) { echo " class=\"active\""; }?>><a href="/team">Team</a></li>
	  <li><a href="https://community.makeroid.tk/">Community</a></li>
	  <li><a class="waves-effect waves-dark btn amber" href="#">Login</a></a></li>
	</ul>
	<br>
	<br>
	
<?php include_once("config/ads.php"); ?>