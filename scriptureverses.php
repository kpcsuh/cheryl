<!DOCTYPE HTML>
<html>
<head>
<title>Cheryl Bible Chanpel : Scripture Memory Verses</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <style>
      .scripture {
        font-family: 'Baloo Bhaina', cursive;
        font-size: 50px;
		height: 600px;
		line-height: 100%;

      }

	   .scriptureSmall {
		font-family: 'Open Sans Condensed', sans-serif;
        font-size: 30px;
		height: 600px;
		line-height: 100%;
		text-decoration: underline;
      }
	  .reference {
		margin:0 auto;
		text-align: left;
		width: 80%;
		line-height: 120%;
		text-weight:bold;
		float:left;
      }

	  .reference::before {
	 /* content : '\2014 \00a0'; */
		content : '';
	  }



    </style>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jssor.slider-20.mini.js"></script>
		<!-- use jssor.slider-20.debug.js instead for debug -->
		<script>
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
			  $Idle : 6000,
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
                    window.setTimeout(ScaleSlider, 100);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });



jQuery(function(ele, url){
updateVerses("#vow-", "https://sacredalpha.herokuapp.com/verse/current");
updateVerses("#rv-", "https://sacredalpha.herokuapp.com/verse/review");
});

function updateVerses(ele, url) {
jQuery.getJSON( url, function( data ) {
jQuery(ele + "reference").html(data.reference);
jQuery(ele + "text").html("<sup>"+ data.number+ "</sup>" + data.text);
console.log(data);
});
}

function displayMemoryVerse() {
  jQuery("#" + "vow-reference").hide();
  jQuery("#" + "vow-text").hide();
  jQuery("#" + "rv-reference").show();
  jQuery("#" + "rv-text").show();
  jQuery("#titleLabel").text("Memory Verse");

}

function displayReviewVerse() {
  jQuery("#" + "vow-reference").show();
  jQuery("#" + "vow-text").show();
  jQuery("#" + "rv-reference").hide();
  jQuery("#" + "rv-text").hide();
  jQuery("#titleLabel").text("Review Verse");
}
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
<body class="no-sidebar">
	<div id="page-wrapper">
		<?php include 'header.php'; ?>
		<section id="banner">
			<!-- Main -->

			(<i>Press Enter for full screen view</i>)
			<br/>

			<section>



			<div id="jssor_1" name = "jssor_1" width = "100%" height= "100%"
				style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1400px; height: 1200px; overflow: hidden;">


        <!-- Loading Screen -->
				<div data-u="loading">
					<div
						style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
					<div
						style="position: absolute; display: block; background: url('img/loading.gif') no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				</div>



				<div data-u="slides" id = "slideId" name = "slideId" width = "100%" height= "100%"
					style="background-color:#1C6B6F; cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 1000px; overflow: hidden;">



          <div style="display: none;" width = "100%" height= "1000px">

            <button type="button" class="button" onclick="displayMemoryVerse()">Memory Verse</button>
             <button type="button" class="button" onclick="displayReviewVerse()">Review Verse</button>
             <br/> <br/>
					<label id ="titleLabel" name = "titleLabel" class = "scriptureSmall">Verse of the week</label>
            <br/>
						<article class = "scripture">
						<div id="vow-reference"></div>
            <div id="rv-reference"></div>
            <br/>
            <span id = "vow-text" style= "padding: 10px"><img src= "images/loading.gif" alt="Loading ..." width="100" height="100"/></span>
            <span id = "rv-text" style= "padding: 10px"><img src= "images/loading.gif" alt="Loading ..." width="100" height=100/></span>
						</article>




					</div>
				</div>
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



</body>

<script>
displayMemoryVerse();
  var fsEle = document.getElementById("slideId");

  function toggleFullScreen() {
    if (!document.mozFullScreen && !document.webkitFullScreen) {
      if (fsEle.mozRequestFullScreen) {
        fsEle.mozRequestFullScreen();
      } else {
        fsEle.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else {
        document.webkitCancelFullScreen();
      }
    }
  }

  document.addEventListener("keydown", function(e) {
    if (e.keyCode == 13) {
      toggleFullScreen();
    }
  }, false);
</script>
</html>
