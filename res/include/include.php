<?php

function generate_header() {
/* Constants */
$__include__header =
	"
	<!-- File header common material -->
	<meta charset=\"utf-8\">
	<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Set icon and author -->
	<link rel=\"icon\" href=\"/res/img/favicon.ico\">
	<meta name=\"author\" content=\"Eamonn Carson\">

	<!-- Bootstrap core CSS -->
	<link href=\"/res/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
	<!-- Bootstrap theme -->
	<link href=\"/res/bootstrap/css/bootstrap-theme.min.css\" rel=\"stylesheet\">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
	  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
	<![endif]-->
	";
/* Generation Code */
	echo $__include__header;
}

function generate_footer() {
/* Constants */
	$__include__footer = 
	"
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
	<script>window.jQuery || document.write('<script src=\"/res/js/vendors/jquery.min.js\"><\/script>')</script>
	<script src=\"/res/bootstrap/js/bootstrap.min.js\"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug
	<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
	-->
	";
/* Generation Code */
	echo $__include__footer;
}

/* active_tab is the name of the tab that is active */
function generate_navbar($active_tab) {
/* Constants */
	$__include__nav_top_portion = 
	"<nav class=\"navbar navbar-inverse navbar-static-top\">
		<div class=\"container\">
			<div class=\"navbar-header\">
				<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
					<span class=\"sr-only\">Toggle navigation</span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
				</button>
				<a class=\"navbar-brand\" href=\"#\">Bootstrap theme</a>
			</div>
			<div id=\"navbar\" class=\"navbar-collapse collapse\">
				<ul class=\"nav navbar-nav\">
	";

	$__include__nav_bottom_portion =
	"				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	";
	$tabs = array(
		"About Me",
		"Projects",
		"Favorites",
	);
	$href = array(
		"TODO",
		"TODO",
		"TODO",
	); 
/* Generation Code */
	/* 	The top and bottom echos wrap the list of tabs below. 
		The active tab has class="active" and others do not. */
	echo $__include__nav_top_portion;
	for ($tab = 0; $tab < count($tabs); $tab = $tab + 1) {
		$class = "";
		if (0 == strcmp($active_tab, $tabs[$tab])) { // if this is the active tab
			$class = "class=\"active\"";
		}
		echo "\t\t\t\t\t<li $class><a href=\"$href[$tab]\">$tabs[$tab]</a></li>\n";
	}
	echo $__include__nav_bottom_portion;
}
?>
