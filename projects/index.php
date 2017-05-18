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
	<title>Eamonn's Projects</title>
	<!-- Custom styles for this template -->
	<link href="" rel="stylesheet">
</head>
<body>
	<?php generate_navbar("Projects"); ?>

	<?php generate_footer(); ?>
</body>
</html>
