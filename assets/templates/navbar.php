<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper deep-purple darken-3">
    <a href="/home" class="brand-logo title">&nbsp;&nbsp;Makeroid</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li<?php if( strpos($_SERVER["REQUEST_URI"], "/home") !== false ) { echo " class=\"active\""; }?>><a href="/home">Home</a></li>
      <li<?php if( strpos($_SERVER["REQUEST_URI"], "/team") !== false ) { echo " class=\"active\""; }?>><a href="/team">Team</a></li>
      <li<?php if( strpos($_SERVER["REQUEST_URI"], "/about") !== false ) { echo " class=\"active\""; }?>><a href="/about">About</a></li>
      <li><a target="_blank" href="https://docs.makeroid.tk/">Documentation</a></li>
      <li><a target="_blank" href="https://community.makeroid.tk/">Community</a></li>
      <li><a class="waves-effect waves-dark btn pink accent-2" target="_blank" href="https://status.makeroid.tk">Status</a></a></li>
    </ul>
    </div>
  </nav>
</div>
<ul class="side-nav" id="mobile-demo">
  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/home") !== false ) { echo " class=\"active\""; }?>><a href="/home">Home</a></li>
  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/team") !== false ) { echo " class=\"active\""; }?>><a href="/team">Team</a></li>
  <li<?php if( strpos($_SERVER["REQUEST_URI"], "/about") !== false ) { echo " class=\"active\""; }?>><a href="/about">About</a></li>
  <li><a target="_blank" href="https://docs.makeroid.tk/">Documentation</a></li>
  <li><a target="_blank" href="https://community.makeroid.tk/">Community</a></li>
  <li><a class="waves-effect waves-dark btn pink accent-2" target="_blank" href="https://status.makeroid.tk">Status</a></a></li>
</ul>
