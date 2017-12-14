<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>The HTML5 Herald</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<!-- Site JS -->
	<script src="<?php echo TEMPLATE_BASE ?>js/site.js"></script>
	
	
	<!-- Site CSS -->
	<link rel="stylesheet" href="<?php echo TEMPLATE_BASE ?>css/style.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	</head>

	<body>
		<div class="container-fluid" role="main">
			<aside id="sidebar" class="col-sm-3 col-md-2">
				<div id="sidebar-header">
					<p id="sidebar-header-content-name"><a>Jesse Hockenbury</a></p>
					<p id="sidebar-header-content-edit-profile"><a>Edit Profile</a></p>
				</div>
				<ul>
					<li><a href="<?php echo BASE; ?>">Home</a></li>
					<li><a href="#">My Profile</a></li>
					<li><a href="#">Game Map</a></li>
					<li><a href="#">MyJournal</a></li>
					<li><a href="#">High Scores</a></li>	
				</ul>
			</aside>
			<main class="col-sm-9 col-md-10">
				<div class="page-header">
					<h1><?php echo $page_title; ?></h1>
				</div>
				<?php echo $content; ?>
			</main>
		</div>
		<!--<script src="js/scripts.js"></script>-->
	</body>
</html>