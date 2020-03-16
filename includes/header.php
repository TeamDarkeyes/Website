<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title><?php echo $pageName; ?> | darkeyes.xyz</title>
		<meta name="title" content="<?php echo $pageName; ?> | darkeyes.xyz">
		<meta name="description" content="">
		<meta name="keywords" content="darkeyes, darkeyes.xyz, dark theme, darkness, dark, dark eyes, dark usercss, github">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="msapplication-TileColor" content="#8899a6">
		<meta name="language" content="English">
		<meta name="author" content="darkeyes.xyz Team">
		<!-- Favicons -->
		<link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
		<link rel="manifest" href="/assets/img/site.webmanifest">
		<link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#8899a6">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Darker+Grotesque&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="/assets/css/styles.css" />
		<!-- Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="de-header">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="/">darkeyes.xyz</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item<?php if ($pageName === 'Home'){echo ' active';}; ?>">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item<?php if ($pageName === 'About'){echo ' active';}; ?>">
							<a class="nav-link" href="/about">About</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dark Projects</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Atom.io Dark</a>
								<!--<div class="dropdown-divider"></div>-->
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
