<!DOCTYPE html>
<html>
<head>
	<title>Douglas Gardner</title>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="isotope/jquery.isotope.min.js"></script>
	<script src="scripts.js"></script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-37637266-1']);
	_gaq.push(['_setDomainName', 'douglasgardner.com']);
	_gaq.push(['_setAllowLinker', true]);
	_gaq.push(['_trackPageview']);

    (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  	})();
	</script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="description" content="">
	<meta name="author" content="Douglas Gardner">
</head>
<body>
	<div id="header">
		<h1>Douglas Gardner</h1>
		<ul class="subtitle">
			<li>Student</li>
			<li>Developer</li>
			<li>Volunteer</li>
			<li>Journalist</li>
			<li>Gamer</li>
			<li>Tea drinker</li>
			<li>Reader</li>
		</ul>
	</div>
	<div id="main">
		<div id="introduction">
			<p class="large">I'm <strong>Douglas Gardner</strong>, a student reading Computer Science at Aberystwyth University.</p>
		</div>

		<div class="box">
			<h2>Projects</h2>
			<ul id="project-key">
				<li id="project-lang-all">Filter:</li>
				<li id="project-lang-bash" class="bash">Bash</li>
				<li id="project-lang-jquery" class="jquery">JQuery</li>
				<li id="project-lang-php" class="php">PHP</li>
				<li id="project-lang-python" class="python">Python</li>
			</ul>
			<p>In my spare time, I occasionally contribute to <i><a href="https://en.wikinews.org/">Wikinews</a></i>, the news-driven sister project to Wikipedia, as well as creating a few small open-source projects. </p>
			<div id="project-list">
				<div class="project python bash">
					<h3>Zorkbot</h3>
					<ul class="project-nav">
						<li><a href="http://github.com/zuzak/zorkbot"><img src="img/source.png" alt="Source code" /></a></li>
					</ul>
					<p>Started as a small project to learn a new language, <strong>zorkbot</strong> is a fairly basic <abbr title="Internet Relay Chat">IRC</abbr> bot.
					<br><br>Coded in abominable Python, I used zorkbot to understand how programming worked in a 'proper' programming language, having previously worked solely in PHP and <a href="http://msdn.microsoft.com/en-us/vstudio/hh388573">lesser</a> languages during secondary school.
					<br><br>This was also an excuse to get to know my way around the basic <abbr title="Bourne Again SHell">Bash</abbr> prompt (as well as GNU Screen), with my first Bash script being used to launch zorkbot.</p>
				</div>
				<div class="project php jquery">
					<h3>Steam Backlog</h3>
					<ul class="project-nav">
						<li><a href="https://github.com/zuzak/backlog"><img src="img/source.png" alt="Source code" /></a></li>
						<li><a href="http://users.aber.ac.uk/dog2/games"><img src="img/link.png" alt="Link" /></a></li>
					</ul>
					<p>A significant proportion of users of the digital game distribution service <a href="http://steamcommunity.com">Steam</a> buy more games than they can play. The <strong>backlog</strong> tool parses Steam's <a href="http://steamcommunit.com/api">API</a> into an easy to read list of unplayed games.
					<br><br>Creating the tool got me used to the idea of how <abbr title="Application Programming Interface">API</abbr>s work, as well as an insight into the use of <abbr title="Extensible Markup Language">XML</abbr>.
				</div>
			</div>
		</div>
	</div>
</body>
