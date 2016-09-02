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
#responsiveImage.ri
{
	position: absolute;
	max-width: 80%;
	top: 20%;
	left: 10%;
	border-radius: 3px;
	box-shadow: 6px 3px 6px 3px rgba(255,255,255,0.9);
}

#responsiveImage.ri:empty
{
	top: 70%;
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
	<body class="no-sidebar">
		<div id="page-wrapper">

			<?php include 'header.php'; ?>

				<section id="banner">
			<!-- Main -->
			<div>
  <?php include 'lens/congregationGallery.php';?>
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
</div>
	</body>
</html>