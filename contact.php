<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $_SESSION['titleName'] ?> Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="contact">
		<div id="page-wrapper">

			<?php include 'header.php'; ?>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-envelope"></span>
						<h2>Get In Touch</h2>
						<p>Use the form below to give /dev/null a piece of your mind.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container 75%">

							<!-- Content -->
								<div class="content">
									<form>
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" placeholder="Email" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" placeholder="Message" rows="7"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="buttons">
													<li><input type="submit" class="special" value="Send Message" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>

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