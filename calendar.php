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
		<image src="images/captionImages/calendar.jpg"
				style="max-width: 100%; float:left;clear: both;" /><span class="icon featured fa-calendar"></span>
			<!-- Main -->
			
			<section>
<h2>Meeting Schedule</h2>

<p></p>



<p></p>
</section>
			
						<section class="wrapper container">
				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<header>
								<h3 class = "h1withUnderline">Sunday</h3>
							</header>
							<table class = "schedule">
								<tr>
									<td>Lord's Supper</td>
									<td>9:00 am</td>
								</tr>
								<tr>
									<td>Adult Bible Class</td>
									<td>10:00 am</td>
								</tr>
								<tr>
									<td>Family Bible Hour</td>
									<td>11:15 am</td>
								</tr>
								<tr>
									<td>Men's Meeting</td>
									<td>6:30 p.m. (Alterante Sun.)</td>
								</tr>
							</table>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<header>
								<h3 class = "h1withUnderline" >Wednesday</h3>
							</header>
							<table class = "schedule">
								<tr>
									<td>Devotional & Prayer</td>
									<td>7pm</td>
								</tr>
							</table>
						</section>

					</div>
				</div>
					<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<header>
								<h3 class = "h1withUnderline">Other Services</h3>
							</header>
							
							
							
							<table class = "schedule">
								<tr>
									<td>Fellowship Night</td>
									<td>Last Friday of Month 6:30 pm</td>
								</tr>
								<tr>
									<td>Luncheon</td>
									<td style = "word-wrap: break-word;">Even Month 1st Sun. 12 pm</td>
								</tr>
							</table>
						</section>

					</div>

				</div>
							<footer>
				<ul class="buttons">
					<li><a href="#calendarSectionId" class="button scrolly">See Full Calendar</a></li>
				</ul>
			</footer>
			</section>
			<div id = "calendarSectionId">
			<br/>
			<iframe
				src="https://www.google.com/calendar/embed?src=cherylbiblechapel%40gmail.com&ctz=America/Chicago"
				style="border: 0; clear: both" width="800" height="600"
				frameborder="0" scrolling="no"></iframe>
			</div>
		</section>
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
				  .height( width * 1.5);
			  }});
			// Resize to fix all iframes on page load.
			}).resize();
			</script>

</body>
</html>