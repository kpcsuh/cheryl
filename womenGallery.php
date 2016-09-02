<!DOCTYPE HTML>
<html>
	<head>
		<title>Cheryl Bible Chanpel : Gallery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
#churchGalarryBody
{
	font-family: sans-serif;
	font-size: 100%;
	margin: 10px;
	color: #ddd;
	background-image: url("images/banner.png");
}
#responsiveImage.ri
{
	position: absolute;
	max-width: 80%;
	top: 10%;
	left: 10%;
	border-radius: 3px;
	box-shadow: 6px 3px 6px 3px rgba(255,255,255,0.9);
}

#responsiveImage.ri:empty
{
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}

@media screen and (orientation: portrait) {
  #responsiveImage.ri {
      max-width: 90%;
  }
}

@media screen and (orientation: landscape) {
  #responsiveImage.ri {
      max-height: 90%;
  }
}
		
		</style>

	</head>
	<body class="no-sidebar" id = "churchGalarryBody">
		<div id="page-wrapper">

			<?php include 'header.php'; ?>

				<section id="banner">
				<image src= "images/captionImages/gallery.jpg"  style = "max-width: 100%; float:left;clear: both;"/>
				<br/><br/><br/><br/>
			<!-- Main -->
			<div>
  <div id="responsiveImage" class="fadein">
  
    <img src="images/church/IMG_0747.JPG" class = "ri" alt="Photograph of orange rock formations in Antelope Canyon, Arizona by eliyasj" data-caption="Antelope Canyon, Arizona">
     <img src="images/church/IMG_0745.JPG" class = "ri" alt="Broad vista photograph of Canyonlands National Park, Arizona, taken by Charles Martin" data-caption="Canyonlands Vista, Arizona" >
     <img src="images/church/IMG_0751.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0764.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0765.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0779.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0780.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0782.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0787.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0788.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0791.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 <img src="images/church/IMG_0794.JPG" class = "ri" alt="Photograph looking through Mesa Arch at a sunrise in Moab, Utah, taken by Krasimir Ganchev" data-caption="Mesa Arch sunrise, Moab, Utah">
	 
  </div>
  <br/><br/><br/><br/>
			</div>


		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
					<script type = "text/javascript" language = "javascript" >
		$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
});
		</script>

	</body>
</html>