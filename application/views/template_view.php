<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Simple CRUD Blog</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	

	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">Simple</span> <span class="cms">Blog</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Main</a></li>
						<li><a href="/blog">Blog</a></li>
						<li><a href="/blog/add">Add article</a></li>
						<li><a href="/login">Login</a></li>
						<li class="last"><a href="/admin">Admin</a></li>
						
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Left menu</h3>
						<ul class="list">
						<li class="first active"><a href="/">Main</a></li>
						<li><a href="/blog">Blog</a></li>
						<li><a href="/blog/add">Add article</a></li>
						<li><a href="/login">Login</a></li>
						<li class="last"><a href="/admin">Admin</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>

					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>

		</div>
		<div id="footer">
			<a href="/">Simple CRUD Blog</a> &copy; 2016</a>
		</div>
	</body>
</html>
