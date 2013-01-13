<!DOCTYPE html>
<html>
<head>
	<title>Douglas Gardner</title>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="isotope/jquery.isotope.min.js"></script>
	<script src="scripts.js"></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="description" content="">
	<meta name="author" content="Douglas Gardner">
</head>
<body>
	<div id="header">
		<h1><?php include "lipsum2.php"; ?></h1>
		<ul class="subtitle">
			<li>Student</li>
			<li>Developer</li>
			<li>Volunteer</li>
			<li>Journalist</li>
			<li>Gamer</li>
			<li>Tea drinker</li>
			<li>Reader</li>
			<li>Lorem</li>
			<li>Ipsum</li>
			<li>Dolor sit</li>
			<li>Amet</li>
		</ul>
	</div>
	<div id="main">
		<div id="introduction">
			<p><?php include "lipsum.php"; ?></p>
		</div>

		<div id="projects">
			<h2>Projects</h2>
			<ul id="project-key">
				<li id="project-lang-all">Filter:</li>
				<li id="project-lang-css" class="css">CSS</li>
				<li id="project-lang-js" class="js">JavaScript</li>
				<li id="project-lang-perl" class="perl">Perl</li>
				<li id="project-lang-php" class="php">PHP</li>
			</ul>
			<p><?php include "lipsum.php"; ?></p>
			<div id="project-list">
				<div class="project css js php">
					<h3>Web Project 1</h3>
					<ul class="project-nav">
						<li><a href="http://github.com/zuzak"><img src="img/source.png" alt="Source code" /></a></li>
						<li><a href="#"><img src="img/link.png" alt="Link" /></a></li>
					</ul>
					<p><?php include "lipsum.php" ?></p>
				</div>
				<div class="project perl">
					<h3>CLI project 1</h3>
					<p><?php include "lipsum.php" ?></p>
				</div>
				<div class="project php">
					<h3>PHP project</h3>
					<p><?php include "lipsum.php" ?></p>
				</div>
				<div class="project perl">
					<h3>Project 4</h3>
					<p><?php include "lipsum.php" ?></p>
				</div>
				<div class="project php">
					<h3>Project 5</h3>
					<p><?php include "lipsum.php" ?></p>
				</div>
			</div>
		</div>
	</div>
</body>
