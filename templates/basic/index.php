<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>The HTML5 Herald</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="<?php echo TEMPLATE_BASE ?>css/style.css">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	</head>

	<body>
		<div class="container" role="main">
			<aside id="sidebar" class="col-md-2">
				<ul>
					<li><a href="#">List Item 1</a></li>
					<li><a href="#">List Item 2</a></li>
					<li><a href="#">List Item 3</a></li>
				</ul>
			</aside>
			<main class="col-md-10">
				<div class="page-header">
					<h1><?php echo $page_title; ?></h1>
				</div>
				<?php echo $content; ?>
			</main>
		</div>
		<!--<script src="js/scripts.js"></script>-->
	</body>
</html>