<?php 
// Load forms class
require_once('lib/forms/form.class.php');

// Start a session
if ( !isset($_SESSION) ) session_start();
?>
<!DOCTYPE html> 
<html dir="ltr" lang="en-US"> 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Wedding - Robert &amp; Adele</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/common.css" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/colorbox.css" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/font-awesome.css" />

    <!-- Skin -->
    <link rel="stylesheet" type="text/css" media="all" id="skin_css" href="media/css/charcoal_peach.css" />

    <link rel="stylesheet" type="text/css"
        media="screen and (max-width: 600px)"
        href="media/css/mobile.css" />        
    
    <link rel="stylesheet" type="text/css"
        media="screen and (min-width: 601px)"
        href="media/css/default.css" />

    <link rel="stylesheet" type="text/css"
    	media="screen and (max-width: 700px)"
    	href="media/css/small.css" />   

    <!-- Google Web Fonts (Bitter & Sofia) -->
 	<link href='http://fonts.googleapis.com/css?family=Bitter:400,400italic,700|Sofia' rel='stylesheet' type='text/css'>

    <!-- Adaptive Images -->
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script> 

    <!-- HTML5 Support in IE8 and lower -->
    <!--[if lt IE 9]>
        <script src="media/js/html5shiv.js" type="text/javascript"></script>
        <script src="media/js/selectivizr-min.js" type="text/javascript"></script>
        <script src="media/js/PIE.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" media="all" href="media/css/default.css" />
        <link rel="stylesheet" type="text/css" media="all" href="media/css/ie8.css" />
    <![endif]-->

    <!--[if IE 7]>
    	<link rel="stylesheet" type="text/css" media="all" href="media/css/font-awesome-ie7.css" />
	<![endif]-->    	
</head>
<body class="home wood">

<?php
    include 'navigation.php';
?>

	<div id="container" class="wrapper">		

		<!-- Header -->
		<header id="header" class="home">

			<hgroup>
				<h1 id="site_title">Robert <span class="ampersand">&</span> Adele</h1>
				<h3>19th April 2014 &#8212; Bowral, NSW</h3>
			</hgroup>

			<!-- Slider -->
			<div id="slider">
				<ul class="rslides">
					<li><img src="media/images/custom/hero-v1.jpg" alt="Picture 1" /></li>
					<li><img src="media/images/custom/hero-v2.jpg" alt="Picture 2" /></li>
					<li><img src="media/images/custom/hero-v3.jpg" alt="Picture 3" /></li>
				</ul>
			</div>
			<!-- End slider -->

		</header>
		<!-- End header -->

		<!-- First panel -->	
		<div class="panel">

			<!-- About us / Our story -->
			<div id="about" class="column_33 column_first divider">
				<h2 class="section_label">Accommodation</h2>

				<h4 class="alt smaller"><strong>Robert & Adele</strong></h4>
				<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem aut a saniae dolut eos dolores peliquod Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. </p>
				<p>Et ipsant por aut ea. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem aut a saniae dolut eos dolores peliquod Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit.</p>
			</div>
			<!-- End about us -->

			<!-- Wedding details -->
			<div id="wedding" class="column_33 divider">
				<h2 class="section_label">Details</h2>

				<h4 class="alt smaller"><strong>Ceremony</strong></h4>
				<p><strong>Saturday 19th April 2014</strong><br />
					Three o'clock in the afternoon<br />
					Gibraltar Hotel<br />
					Bowral, New South Wales (<a href="">Get directions</a>)
				</p>

				<div class="google_map" 
					data-longtitude="150.4171167" 
					data-latitude="-34.4686667" 
					data-zoom="11" 
					data-marker="Gibraltar Hotel">
				</div>

				<h4 class="alt smaller"><strong>Reception</strong></h4>
				<p>Following Ceremony<br />
					At five o'clock in the evening
				</p>


			</div>
			<!-- End wedding details -->

			<!-- Blog -->
			<div id="blog" class="column_33 column_last">
				<h2 class="section_label">From the Blog</h2>

				<ul class="posts_widget">
					<li>
						<h4 class="no_margin">
							<a href="blog-single.html">At vero eos et accusamus et iusto</a>
						</h4>
						<p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					</li>
					<li>
						<h4 class="no_margin">
							<a href="blog-single.html">At vero eos et accusamus et iusto</a>
						</h4>
						<p>Dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec</p>
					</li>
					<li>
						<h4 class="no_margin">
							<a href="blog-single.html">At vero eos et accusamus et iusto</a>
						</h4>
						<p>Dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec</p>
					</li>
				</ul>
			</div>
			<!-- End blog -->

			<div class="waves"></div>

		</div>
		<!-- End first panel -->

		<!-- Photos -->	
		<ul class="gallery medium carousel colorbox_gallery" id="photos">

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

		</ul>
		<!-- End photos -->

		<!-- Second panel -->
		<div class="panel panel_last">

			<!-- RSVP -->
			<div id="rsvp" class="column_67 column_first divider">
				<form method="post" action="lib/forms/submit.php" name="rsvpform" id="rsvpform">

					<?php Osfa_Form::status_message() ?>

					<input type="hidden" name="form_id" value="RSVP" />
                    <input type="hidden" name="subject" value="RSVP submission" />
                    
					<h2 class="section_label">RSVP</h2>

					<div class="column_40 column_first">
					
						<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem.</p>

						<input type="hidden" name="form_id" value="RSVP" />
	                    
                    	<label class="fullwidth">
                        	<input type="radio" name="attending" value="1" class="radio" />
                        	I/We will be there!
                        </label>
	                    
                    	<label class="fullwidth">
                        	<input type="radio" name="attending" value="0" class="radio" />
                        	Sorry, I/we can't make it
                        </label>
                        <?php Osfa_Form::status_message('attending') ?>

	                </div>
                    
                    <div class="column_60 column_last">
	                    <fieldset>
	                        <legend>Name(s)</legend>
	                        <input type="text" name="name[0]" accesskey="1" />
	                        <input type="text" name="name[1]" accesskey="2" />
	                        <input type="text" name="name[2]" accesskey="3" />
	                        <input type="text" name="name[3]" accesskey="4" />
	                        <input type="text" name="name[4]" accesskey="5" />
	                    </fieldset>                    

						<button class="submit" id="submit">Send</button>
					</div>
				</form>
			</div>
			<!-- End RSVP -->
		
			<!-- Registry -->
			<div id="registry" class="column_33 column_last">
				<h2 class="section_label">Registry</h2>
				<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>
				<hr class="sharp" />
				<ul class="centered registry_list">
					<li><a href="">myer.com.au</a></li>
					<li><a href="">anaconda.com.au</a></li>
				</ul>
			</div>		
			<!-- End registry -->

			<div class="waves"></div>

		</div>
		<!-- End second panel -->

		<!-- Footer -->
		<footer id="pre_footer">

			<div class="connect">
				<h4>Connect</h4>
				<div class="email"><a href="mailto:hello@yourwedding.com">hello@yourwedding.com</a></div>
				
				<ul class="social horizontal">
					<li><a href="" class="facebook social_button">Facebook</a></li>
					<li><a href="" class="twitter social_button">Twitter</a></li>
					<li><a href="" class="flickr social_button">Flickr</a></li>
					<li><a href="" class="rss social_button">RSS</a></li>
					<li><a href="" class="youtube social_button">YouTube</a></li>
				</ul>
			</div>

		</footer>
		<!-- End footer -->

	</div>

	<footer id="footer">

		<div class="wrapper">

			<div class="double_dotted">
				<h4>R <span class="ampersand">&</span> A</h4>
			</div>

			<div class="bottom">
				<span class="float_left">&copy; Copyright 2012</span>
				<a class="float_right">Hitched theme by <span class="osfa">Studio 164a</span></a>
			</div>

		</div>

	</footer>

<!-- Load Javascript right before the closing body tag -->

<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!-- Flexnav -->
<script type="text/javascript" src="media/js/jquery.flexnav.js"></script>

<!-- Dropdown Menus -->
<script type="text/javascript" src="media/js/jquery.dropdownmenu.js"></script>

<!-- Hover Intent -->
<script type="text/javascript" src="media/js/jquery.hoverIntent.min.js"></script>

<!-- Scroll To -->
<script type="text/javascript" src="media/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="media/js/jquery.localscroll-1.2.7-min.js"></script>

<!-- Responsive Sliders -->
<script type="text/javascript" src="media/js/responsiveslides.min.js"></script>

<!-- CarouselSwipe -->
<script type="text/javascript" src="media/js/jquery.carouselSwipe.js"></script>

<!-- Google Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="media/js/jquery.ui.map.min.js"></script>

<!-- Image Hover -->
<script type="text/javascript" src="media/js/jquery.imageHover.js"></script>

<!-- Colorbox -->
<script type="text/javascript" src="media/js/jquery.colorbox.min.js"></script>

<!-- Hitched default javascript setup -->
<script type="text/javascript" src="media/js/hitched.js"></script>

<!-- Call scripts -->
<script>
(function($) {
	$(document).ready( function() {		
		HITCHED.documentReady();
	});

	$(window).load( function() {	
		HITCHED.windowLoad();
	});	
})(jQuery);
</script>
    

</body>
