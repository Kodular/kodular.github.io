<!--Author: Conor Shipp-->
<!--Copyright 2017 Makeroid-->
<!DOCTYPE html>
<html>
  <head>
    <title>Home | Makeroid</title>

    <?php include "header.php"; ?>

    <link rel="stylesheet" href="/CS/vendor/bootstrap-3.3.6/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/CS/vendor/owl-carousel/assets/owl.carousel.css">
  	<link rel="stylesheet" href="/CS/vendor/custom-scrollbar/jquery.mCustomScrollbar.min.css">
  	<link rel="stylesheet" href="/CS/vendor/font-awesome-4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="/CS/vendor/linear-icons/fonts.css">
  	<link rel="stylesheet" href="/CS/vendor/animate.css">
  	<link rel="stylesheet" href="/CS/css/style.css" />

    <!-- <div class="centre-arrangement">
      <h1>Welcome to Makeroid!</h1>
      <p>Makeroid is an online drag-and-drop Android app builder.</p>
      <br>
      <h4>Hover over the icons to read more</h4>
      <ul id="menu">
      <li><i class="help-icons tooltipped material-icons black-text large" data-position="bottom" data-delay="50" data-tooltip="Cloud based tool - no software to download or install, it runs straight from your broswer!">cloud</i></li>
      <li><i class="help-icons tooltipped material-icons black-text large" data-position="bottom" data-delay="50" data-tooltip="Need any help creating your apps? We will help you with all questions you have.">help</i></li>
      <li><i class="help-icons tooltipped material-icons black-text large" data-position="bottom" data-delay="50" data-tooltip="All you need is a Google account!">account_box</i></li>
      <li><i class="help-icons tooltipped material-icons black-text large" data-position="bottom" data-delay="50" data-tooltip="You can make your apps funtion by using blocks which snap together. You don't need to learn any code!">extension</i></li>
      </ul>
    </div> -->

    <!-- Loader -->
    <div class="loader" id="CS">
    	<div class="preloader-wrapper big active">
    	    <div class="spinner-layer spinner-blue-only">
    	    	<div class="circle-clipper left">
    	        	<div class="circle"></div>
    	    	</div>
    	    	<div class="gap-patch">
    	        	<div class="circle"></div>
    	      	</div>
    	      	<div class="circle-clipper right">
    	        	<div class="circle"></div>
    	    	</div>
    	  	</div>
    	</div>
    </div>
    <!-- End Loader -->
    <div class="wrapper" id="CS">
    	<div class="main">
    		<div class="tab-content">
    			<div role="tabpanel" class="tab-pane active" id="home">
    				<!-- Section Home -->
    				<section class="section section-home">
    					<!-- Section Home Header -->
    					<header class="section-head">
    						<div class="container">
    							<div class="section-head-inner" style="font-size: 20px;">
    								<h1>Makeroid</h1>
    								<h4>A new era for app building</h4>
    							</div>
    						</div>
    					</header>
    					<!-- End Section Home Header -->
    					<!-- Section Home Body -->
    					<div class="section-body">
    						<div class="container">
    							<div class="row">
    								<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    									<!-- Countdown -->
    									<div class="card card-countdown" data-launch-date="2017/12/31">
    										<div class="countdown-part ds"></div>
    										<div class="countdown-part hs"></div>
    										<div class="countdown-part ms"></div>
    										<div class="countdown-part ss"></div>
    										<div class="countdown-labels">
    											<span>days</span>
    											<span>hours</span>
    											<span>minutes</span>
    											<span>seconds</span>
    										</div>
    									</div>
    									<!-- End Countdown -->
    									<!-- Subscribe Form -->
    									<form action="http://legendary-works.com/demo/sirius/?" method="post" class="form form-subscribe">
    										<div class="row">
    											<div class="col-sm-8 col-sm-offset-2">
    												<div class="input-field">
    										        	<input id="email" type="email" class="validate">

    										        	<label for="email">Email Address</label>
    										        </div>
    											</div>
    										</div>
    										<div class="row">
    											<div class="col-sm-12">
    												<button type="submit" class="waves-effect waves-light btn blue">subscribe</button>
    											</div>
    										</div>
    									</form>
    									<!-- End Subscribe Form -->
    								</div>
    							</div>
    						</div>
    					</div>
    					<!-- End Section Home Body -->
    					<!-- Section Home Footer -->
    					<footer class="section-foot">
    						<div class="container">
    							<p class="copyright">Copyright &copy; 2017 <span>Makeroid Inc.</span></p>
    							<ul class="socials">
    								<li>
    									<a href="#" class="waves-effect waves-light">
    										<i class="fa fa-facebook"></i>
    									</a>
    								</li>
    								<li>
    									<a href="https://twitter.com/MakeroidBuilder" class="waves-effect waves-light">
    										<i class="fa fa-twitter"></i>
    									</a>
    								</li>
    								<li>
    									<a href="#" class="waves-effect waves-light">
    										<i class="fa fa-google"></i>
    									</a>
    								</li>
    								<li>
    									<a href="#" class="waves-effect waves-light">
    										<i class="fa fa-youtube-play"></i>
    									</a>
    								</li>
    								<li>
    									<a href="https://instagra.com/MakeroidBuilder" class="waves-effect waves-light">
    										<i class="fa fa-instagram"></i>
    									</a>
    								</li>
    								<li>
    									<a href="#" class="waves-effect waves-light">
    										<i class="fa fa-pinterest-p"></i>
    									</a>
    								</li>
    							</ul>
    						</div>
    					</footer>
    					<!-- End Section Home Footer -->
    				</section>
    				<!-- End Section Home -->
    			</div>
    		</div>
    	</div>
    </div>
    <!-- Scripts -->
    <script src="/CS/vendor/bootstrap-3.3.6/js/bootstrap.min.js"></script>
    <script src="/CS/vendor/jquery-validation-1.14.0/jquery.validate.min.js"></script>
    <script src="/CS/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="/CS/vendor/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/CS/vendor/jquery.countdown-2.1.0/jquery.countdown.min.js"></script>
    <script src="/CS/js/functions.js"></script>

    <?php include "fab.php"; ?>  </body>
</html>
