<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cheryl Bible Chapel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">
<?php include 'header.php'; ?>
				
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
                    refSize = Math.min(refSize, 1200);
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
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

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
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
				


			<!-- Banner -->
				<section id="banner">
				

								    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" >
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">
       
<div style="display: none;"><img data-u="image" src="images\frontpage\IMG_0955KSTV.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\frontpage\IMG_0986SV.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\frontpage\IMG_0983KSV.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\frontpage\IMG_0973KTV.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\frontpage\IMG_0966KV.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\frontpage\IMG_0961TV.JPG" /></div>

<!--
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0961.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0963.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0965.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0966.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0969.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0970.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0971.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0972.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0973.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0980.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0983.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0986.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0988.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0989.JPG" /></div>
<div style="display: none;"><img data-u="image" src="images\chapel\IMG_0997.JPG" /></div>

-->
          
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:6px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:123px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:123px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
		
   </div>
   <p/>   <p/>
   
   							<div class="inner" style="position:relative; z-index : 1000;">

						<header>
							<h2>CHERYL BIBLE CHAPEL</h2>
						</header>
						<p><strong>135 West Cheryl Drive, San Antonio, TX 78228</strong>
						<br />
						210-681-0293
						<br />
						cbc@cherylbiblechapel.com</p>
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
						<span class="icon fa-bar-chart-o"></span>
						<h2>We are a <strong>Christian Church</strong> in San Antonio.
						<br />
						We gather to worship our God with our hearts, souls and mind.</h2>
						<p>It is a <strong> believer's place </strong> to worship, grow, teach and follow the footsteps <strong> Jesus Christ </strong>.
						<br />
						We welcome you to join us to <strong>worship</strong> with us and be part of <strong>His Kingdom</strong> and grow in <strong>His Word</strong>.
						<br />
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row 50%">
								<div class="8u 12u(narrower)">

									<header>
										<h2><strong>Faith Statement</strong></h2>
									</header>
									<p>We are a Christian Church teaching and practicing <strong>New Testament</strong> principles. The believers who gather to the <strong>Lord Jesus Christ</strong> at Cheryl Bible Chapel are committed to the <strong> true worship of God</strong>, to the equipping of Christians for holy life and service, and to the proclamation of the good news of our <strong>Lord and Savior Jesus Christ.</strong></p>
									<footer>
										<ul class="buttons">
											<li><a href="#" class="button">Find Out More</a></li>
										</ul>
									</footer>

								</div>
								<div class="4u 12u(narrower) important(narrower)">

									<ul class="featured-icons">
										<li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
										<li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>

								</div>
							</div>
						</section>

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-clock-o"></span>
										<header>
											<h3>Sunday</h3>
										</header>
										<p><table>
										<tr><td>Lord's Supper</td><td>9:00 am</td></tr>
										<tr><td>Sunday School</td><td>10:00 am</td></tr>
										<tr><td>Family Message</td><td>11:15 am</td></tr>
										</table></p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-clock-o"></span>
										<header>
											<h3>Wednesday</h3>
										</header>
										<p>
										<table>
										<tr><td>Mid-week Prayer</td><td> 7pm - 8pm</td></tr>
										</table>
										</p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-clock-o"></span>
										<header>
											<h3>Other</h3>
										</header>
										<p>
										<table>
										<tr><td>Ladies Bible Study</td><td>Every Thursday 6:30 pm</td></tr>
										<tr><td>Fellowship Night</td><td>3rd Friday of Month 7 pm</td></tr>
										<tr><td>Luncheon</td><td>Second Sunday of Even Month</td></tr>
										</table>
										</p>
									</section>

								</div>
								
						</div>
						</section>

					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Know more about <strong>What we are</strong></h2>
							</header>

							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/elders.jpg" alt="" /></a>
										<header>
											<h3>Elders</h3>
										</header>
										<p>About elders.</p>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/church/IMG_0794.JPG" alt="" /></a>
										
										<header>
											<h3>KIDS</h3>
										</header>
										<p>About Kids</p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/church/IMG_0747.JPG" alt="" /></a>
										<header>
											<h3>Youth</h3>
										</header>
										<p>About Youth</p>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="#" class="image featured"><img src="images/church/IMG_0782.JPG" alt="" /></a>
										<header>
											<h3>Fellowship</h3>
										</header>
										<p>About Fellowship</p>
									</section>

								</div>
							</div>

							<footer class="major">
								<ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul>
							</footer>

						</section>

				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Do You Have <strong>Peace with God?</strong>?</h2>
						<div>For God so loved the world, that he gave his only Son, that whoever believes in him should not perish but have eternal life. - John 3:16 <br/>
For all have sinned and fall short of the glory of God. - Rom 3:23 <br/>
God shows his love for us in that while we were still sinners, Christ died for us. - Rom 5:8 <br/>
For the wages of sin is death, but the free gift of God is eternal life in Christ Jesus our Lord. - Rom 6:23 <br/>
If you confess with your mouth that Jesus is Lord and believe in your heart that God raised him from the dead, you will be saved. - Rom 10:9<br/></div>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="#" class="button special">The Gospel</a></li>
							<li><a href="#" class="button">The Gospel</a></li>
						</ul>
					</footer>

				</section>
				
				<section id="feedback" class="wrapper style3 container special">
			<div>
			<iframe src="https://docs.google.com/forms/d/1GjQP7aElZbbdM7dKKIG6nEoVipZTiPoRtWvgik5qJko/viewform?embedded=true" width="100%" height="850" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
			</div>
			
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