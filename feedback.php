<!DOCTYPE HTML>
<html>
	<head>
		<title>Cheryl Bible Chanpel : Feedback</title>
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

				<section id="banner"/>
			<!-- Main -->
			<image src= "images/captionImages/feedback.jpg"  style = "max-width: 100%; float:left;clear: both;"/><span class="icon featured fa-commenting"></span>
				<br/><br/><br/><br/>
			<div>
					<iframe
					src="https://docs.google.com/forms/d/1GjQP7aElZbbdM7dKKIG6nEoVipZTiPoRtWvgik5qJko/viewform?embedded=true"
					width="80%" height="850" frameborder="0" marginheight="0"
					marginwidth="0">Loading...</iframe>
			</div>
		</div>
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
			
						<script type = "text/javascript" language = "javascript">
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

	</body>
</html>