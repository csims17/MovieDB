<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Movie DB</title>

		<!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="home">MovieDB</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href= <?php echo URL_ROOT . "Movie/index" ?> >Movies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href=<?php echo URL_ROOT . "Actor/index" ?>>Actors</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href=<?php echo URL_ROOT . "User/index" ?>>Users</a>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href=<?php echo URL_ROOT . "User/login" ?>>Login</a>
						</li>		
						<li class="nav-item">
							<a class="nav-link" href=<?php echo URL_ROOT . "User/create" ?>>Sign Up</a>
						</li>
					</ul>
				</div>
			</nav>

