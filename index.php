<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Cheryl Bible Chanpel</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jssor.slider-20.mini.js"></script>
		<!-- use jssor.slider-20.debug.js instead for debug -->
		<script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 2020);
					//refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

		<style>

/* jssor slider bullet navigator skin 05 css */
/*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
.jssorb05 {
	position: absolute;
}

.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
	position: absolute;
	/* size of bullet elment */
	width: 16px;
	height: 16px;
	background: url('img/b05.png') no-repeat;
	overflow: hidden;
	cursor: pointer;
}

.jssorb05 div {
	background-position: -7px -7px;
}

.jssorb05 div:hover, .jssorb05 .av:hover {
	background-position: -37px -7px;
}

.jssorb05 .av {
	background-position: -67px -7px;
}

.jssorb05 .dn, .jssorb05 .dn:hover {
	background-position: -97px -7px;
}

/* jssor slider arrow navigator skin 22 css */
/*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
.jssora22l, .jssora22r {
	display: block;
	position: absolute;
	/* size of arrow element */
	width: 40px;
	height: 58px;
	cursor: pointer;
	background: url('img/a22.png') center center no-repeat;
	overflow: hidden;
}

.jssora22l {
	background-position: -10px -31px;
}

.jssora22r {
	background-position: -70px -31px;
}

.jssora22l:hover {
	background-position: -130px -31px;
}

.jssora22r:hover {
	background-position: -190px -31px;
}

.jssora22l.jssora22ldn {
	background-position: -250px -31px;
}

.jssora22r.jssora22rdn {
	background-position: -310px -31px;
}
</style>
</head>
<body class="index">
	<div id="page-wrapper">
<?php include 'header.php'; ?>
		<!-- Banner -->
		<section id="banner">


			<div id="jssor_1"
				style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
				<!-- Loading Screen -->
				<div data-u="loading">
					<div
						style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
					<div
						style="position: absolute; display: block; background: url('img/loading.gif') no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				</div>
				

	
				<div data-u="slides"
					style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">

					<div style="display: none;">
						<img data-u="image" src="images/frontpage/IMG_0955KSTV.JPG" />
					</div>
<!--					<div style="display: none;">
						<img data-u="image" src="images/frontpage/IMG_0986SV.JPG" />
					</div>
					<div style="display: none;">
						<img data-u="image" src="images/frontpage/IMG_0983KSV.JPG" />
					</div>
					<div style="display: none;">
						<img data-u="image" src="images/frontpage/IMG_0973KTV.JPG" />
					</div>
					<div style="display: none;">
						<img data-u="image" src="images/frontpage/IMG_0966KV.JPG" />
					</div>
					<div style="display: none;">
						<img data-u="image" src="images/frontpage/IMG_0961TV.JPG" />
					</div>
-->
				</div>
				
			
				<!-- Bullet Navigator -->
				<div data-u="navigator" class="jssorb05"
					style="bottom: 16px; right: 6px;" data-autocenter="1">
					<!-- bullet navigator item prototype -->
					<div data-u="prototype" style="width: 16px; height: 16px;"></div>
				</div>
				<!-- Arrow Navigator -->
				<span data-u="arrowleft" class="jssora22l"
					style="top: 123px; left: 12px; width: 40px; height: 58px;"
					data-autocenter="2"></span> <span data-u="arrowright"
					class="jssora22r"
					style="top: 123px; right: 12px; width: 40px; height: 58px;"
					data-autocenter="2"></span> <a href="http://www.jssor.com"
					style="display: none">Jssor Slider</a>

			</div>
			<p/>
			<p/>

			<div class="inner" style="position: relative; z-index: 1000;">

				<header>
					<h2>Cheryl Bible Chapel</h2>
				</header>
				<p>
				<div class="icon fa-map-marker space"><span class = "space"></span><a class="tel" tabIndex="-1" href="churchMap.php#churchMapId"><strong>135 West Cheryl Drive, San Antonio, TX 78228</strong></a></div> <br/>
				<div class="icon fa-phone"><span class = "space"></span><a class="tel" tabIndex="-1" href="tel:2106810293"><strong>(210) 681-0293</strong></a></div> <br/>
				<div class="icon fa-envelope"><span class = "space"></span><a class="tel" tabIndex="-1" href="mailto:cbc@cherylbiblechapel.com"> cbc@cherylbiblechapel.com</a></div>
				</p>


					
					
					
				
				<footer>
					<ul class="buttons vertical">
						<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
					</ul>
				</footer>

			</div>



			<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->


		</section>

		<!-- Main -->
		<article id="main">

			<header class="special container">
	<!--			<span class="icon fa-bar-chart-o"></span>   -->
				<h2>
					We are an assembly of believers gathered to the name of the Lord Jesus Christ to devote ourselves to the apostles doctrine, fellowship, breaking of bread and prayer.
				</h2>
			
			</header>

			<!-- One -->
			<section class="wrapper style2 container special-alt">
				<div class="row 100%">
					<div class="8u 12u(wide)">

						<header>
							<h2>
								<strong>Faith Statement</strong>
							</h2>
						</header>
						<p>
							<p class=MsoNormal style='margin-left:.25in;text-indent:-.25in;text-autospace:
							none'><b><span>1)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</span></span></b><b><span><span class=msoDel></span>THE
							SCRIPTURES</span></b></p>

							<p class=MsoNormal style='margin-left:.5in;text-indent:-.25in;text-autospace:
							none'><span>a)<span style='font:7.0pt'>
							</span></span><span>All Scripture is inspired in the original
							manuscripts</span><span>, and is therefore infallible and inerrant (2
							Timothy 3:16-17; 2 Peter 1:21; Matthew 5:18; 1 Corinthians 2:13). </span></p>

							<p class=MsoNormal style='margin-left:.5in;text-indent:-.25in;text-autospace:
							none'><span>b)<span style='font:7.0pt'>
							</span></span><span>We further believe that the scriptures are
							sufficient for all things pertaining to life and godliness (2 Peter 1:3). The
							Scriptures are the Word of God! The Scriptures are the only inerrant,
							infallible, complete, authoritative, and sufficient Word of God.</span></p>


						</p>
						<footer>
							<ul class="buttons">
								<li><a href="faithStatement.php" class="button">Find Out More</a></li>
							</ul>
						</footer>

					</div>
				</div>
			</section>

			<!-- Two -->
			<section class="wrapper style1 container special">
			<header class="special container">
			<h2>Meeting Schedule</h2>	<span class="icon featured fa-calendar"></span>
			</header>
			
				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<span class="icon featured fa-clock-o"></span>
							<header>
								<h3>Sunday</h3>
							</header>
							<p>
							
							
							<table>
								<tr>
									<td>Lord's Supper</td>
									<td>9:00 am</td>
								</tr>
								<tr>
									<td>Sunday School</td>
									<td>10:00 am</td>
								</tr>
								<tr>
									<td>Family Bible Hour</td>
									<td>11:15 am</td>
								</tr>
								<tr>
									<td>Men's Meeting</td>
									<td>6:30 p.m. (every alterante Sun)</td>
								</tr>
								
							</table>
							</p>
						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<span class="icon featured fa-clock-o"></span>
							<header>
								<h3>Wednesday</h3>
							</header>
							<p>
							
							
							<table>
								<tr>
									<td>Devotional and Prayer</td>
									<td>7pm - 8pm</td>
								</tr>
							</table>
							</p>
						</section>

					</div>
				</div>
			<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<span class="icon featured fa-clock-o"></span>
							<header>
								<h3>Other Services</h3>
							</header>
							<p>
							
							
							<table>

								<tr>
									<td>Fellowship Night</td>
									<td>Last Friday of Month 6:30 pm</td>
								</tr>
								<tr>
									<td>Luncheon</td>
									<td>1st Sunday of Even Month 12 noon</td>
								</tr>
							</table>
							</p>
						</section>

					</div>

				</div>
				
				<footer class="major">
					<ul class="buttons">
						<li><a href="calendar.php" class="button">See Full Calendar Events</a></li>
					</ul>
				</footer>
			</section>

			<!-- Three -->
	<!--		
			<section class="wrapper style1 container special">
			
			<header class="special container">
			<h2>Chapel Gallery :</h2>	<span class="icon fa-picture-o"></span>
			</header>


				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img src="images/sectional/IMG_0942.JPG"
								alt="" title = "Youth and Men" /></a>
														<header>
							<!-- <h3>Youth and Men</h3>
							</header>
							<p>About Youth and Men</p> -->
	<!--					</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="kidsGallery.php" class="image featured"><img
								src="images/sectional/IMG_0794.JPG" alt="" title = "Kids" /></a>
<!-- 							<header>
								<h3>Kids</h3>
							</header>
							<p>About Kids</p> -->
		<!--					</section>

					</div>
				</div>
				<div class="row">
					<div class="6u 12u(narrower)">

						<section>
							<a href="womenGallery.php" class="image featured"><img
								src="images/sectional/IMG_0764.JPG" alt="" title = "Women"/></a>
<!-- 							<header>
								<h3>Women</h3>
							</header>
							<p>About Women</p> -->
	<!--						</section>

					</div>
					<div class="6u 12u(narrower)">

						<section>
							<a href="#" class="image featured"><img
								src="images/sectional/IMG_0782.JPG" alt="" title = "Fellowship"/></a>
<!-- 							<header>
								<h3>Fellowship</h3>
							</header>
							<p>About Fellowship</p> -->
	<!--						</section>

					</div>
				</div>

				<footer class="major">
					<ul class="buttons">
						<li><a href="lens/congregationGallery.php" class="button">See Congregation Gallery</a></li>
					</ul>
				</footer>

			</section>
-->
		</article>

		<!-- CTA -->
		<section id="cta">

			<header>
				<h2>
					What is <strong>the Gospel</strong>?
				</h2>
	<!--			<div>
					For God so loved the world, that he gave his only Son, that whoever
					believes in him should not perish but have eternal life. - John
					3:16 <br /> For all have sinned and fall short of the glory of God.
					- Rom 3:23 <br /> God shows his love for us in that while we were
					still sinners, Christ died for us. - Rom 5:8 <br /> For the wages
					of sin is death, but the free gift of God is eternal life in Christ
					Jesus our Lord. - Rom 6:23 <br /> If you confess with your mouth
					that Jesus is Lord and believe in your heart that God raised him
					from the dead, you will be saved. - Rom 10:9<br />
				</div>   -->
			</header>
			<footer>
				<ul class="buttons">
					<li><a href="theGospel.php" class="button special">The Gospel</a></li>
		<!--			<li><a href="theGospel.php" class="button">The Gospel</a></li> -->
				</ul>
			</footer>

		</section>

		<!-- Footer -->
		<?php include 'footer.php'; ?>
		</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollgress.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>
</html>