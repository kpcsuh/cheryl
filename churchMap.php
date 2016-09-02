<!DOCTYPE HTML>
<html>
<head>
<title>Cheryl Bible Chanpel : Church Map</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body class="no-sidebar">
	<div id="page-wrapper">

			<?php include 'header.php'; ?>

				<section id="banner">
			<!-- Main -->
			<image src="images/captionImages/locationMap.jpg"
				style="max-width: 100%; float:left;clear: both;" /><span class="icon featured fa-map-marker"></span>
			<br/>
			<article class="artticleStyle">
				We are located in Alamo city, San Antonio, on Bandera.
				<p>
					<span>135 W Cheryl Dr. </span> <br>
					<span> San Antonio, TX 78228 </span>
					<div class="icon fa-envelope"><span class = "space"></span><a class="tel" tabIndex="-1" href="mailto:cbc@cherylbiblechapel.com"> cbc@cherylbiblechapel.com</a></div>
				</p>
				
				<p>
					Please call us on <a class="tel" tabIndex="-1" href="tel:2106810293">(210) 681-0293</a> if you need futher directions. 
				</p>
			</article>
			<p />
			<footer>
				<ul class="buttons">
					<li><a href="#churchMapId" class="button scrolly">See Map</a></li>
				</ul>
			</footer>



			<br />
			<br />
			<div id="churchMapId">
			<br/>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1736.9677041796795!2d-98.55979!3d29.4598964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c5e8f69d82d8d%3A0xee1762899e3645fc!2s135+W+Cheryl+Dr%2C+San+Antonio%2C+TX+78228!5e0!3m2!1sen!2sus!4v1440706314146"
					width="600" height="450" frameborder="0" style="border: 0" allowfullscreen></iframe>
			</div>
		</section>
		
	<?php include 'footer.php'; ?>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollgress.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

		<script type="text/javascript" language="javascript">
						// Find all iframes
			var $iframes = $( "iframe" );

			// Find &#x26; save the aspect ratio for all iframes
			$iframes.each(function () {
			var width = $( this ).parent().width();
			if ( width < 1200 ) {
			
			  $( this ).data( "ratio", this.height / this.width )
				// Remove the hardcoded width &#x26; height attributes
				.removeAttr( "width" )
				.removeAttr( "height" );
			}
			});

			// Resize the iframes when the window is resized
			$( window ).resize( function () {
			
			  $iframes.each( function() {
			 
				// Get the parent container&#x27;s width
				var width = $( this ).parent().width();
				 if ( width < 1200 ) {
				var widthTemp = width * 0.9;
				$( this ).width( width )
				  .height( width * 0.9);
			  }});
			// Resize to fix all iframes on page load.
			}).resize();
			</script>
</div>
</body>
</html>