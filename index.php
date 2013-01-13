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
				<li id="project-lang-bash" class="bash">Bash</li>
				<li id="project-lang-python" class="python">Python</li>
			</ul>
			<p><?php include "lipsum.php"; ?></p>
			<div id="project-list">
				<div class="project python bash">
					<h3>Zorkbot</h3>
					<ul class="project-nav">
						<li><a href="http://github.com/zuzak/zorkbot"><img src="img/source.png" alt="Source code" /></a></li>
					</ul>
					<p>Started as a small project to learn a new language, <strong>zorkbot</strong> is a fairly basic <abbr title="Internet Relay Chat">IRC</abbr> bot.
					<br><br>Coded in abominable Python, I used zorkbot to understand how programming worked in a 'proper' programming language, having previously worked solely in PHP and .NET during secondary school.
					<br><br>This was also an excuse to get to know my way around the basic <abbr title="Bourne Again SHell">Bash</abbr> prompt (as well as GNU Screen), with my first Bash script being used to launch zorkbot.</p>
				</div>
			</div>
		</div>
	</div>
</body>
