<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		// include the section generation file
		$root = realpath($_SERVER["DOCUMENT_ROOT"]);
		require "$root/res/include/include.php";
		generate_header();
	?>
	<meta name="description" content="">
	<title>Eamonn Carson's Personal Website</title>
	<!-- Custom styles for this template -->
	<link href="" rel="stylesheet">
</head>
<body>
	<?php generate_navbar("About Me"); ?>

	<!-- Carousel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
			</div>
			<div class="item">
				<img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
			</div>
			<div class="item">
				<img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<?php generate_footer(); ?>
</body>
</html>
