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
			<li><a href="#student">Student</a></li>
			<li><a href="#developer">Developer</a></li>
			<li><a href="#journalist">Journalist</a></li>
			<li><a href="#gamer">Gamer</a></li>
		</ul>
	</div>
	<div id="main">
		<section id="introduction">
			<p class="large">I'm <strong>Douglas Gardner</strong>, a student reading Computer Science at Aberystwyth University.</p>
		</section>

		<section class="box" id="developer">
			<h2>Computing</h2>
			<p>In the last year, I have created a few small open source projects in an attempt to enrich my understanding of programming, with <?php
				$json = file_get_contents("https://api.github.com/users/zuzak/repos");
				$repos = json_decode($json);
				echo count($repos);
				$langs = array();
				foreach ($repos as $repo) {
					array_push($langs,$repo->language);
				}
				$langs = array_filter(array_unique($langs));
				?> Github repositories (in <?php echo count($langs); ?> languages) to my name.
				The more successful projects are listed below:</p>
			<ul id="project-key">
				<li id="project-lang-all">Filter:</li>
				<li id="project-lang-bash" class="bash">Bash</li>
				<li id="project-lang-js" class="js">JavaScript</li>
				<li id="project-lang-php" class="php">PHP</li>
				<li id="project-lang-python" class="python">Python</li>
			</ul>
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
				<div class="project php js">
					<h3>Steam Backlog</h3>
					<ul class="project-nav">
						<li><a href="https://github.com/zuzak/backlog"><img src="img/source.png" alt="Source code" /></a></li>
						<li><a href="http://users.aber.ac.uk/dog2/games"><img src="img/link.png" alt="Link" /></a></li>
					</ul>
					<p>A significant proportion of users of the digital game distribution service <a href="http://steamcommunity.com">Steam</a> buy more games than they can play. The <strong>backlog</strong> tool parses Steam's <a href="http://steamcommunity.com/api">API</a> into an easy to read list of unplayed games.
					<br><br>Creating the tool got me used to the idea of how <abbr title="Application Programming Interface">API</abbr>s work, as well as an insight into the use of <abbr title="Extensible Markup Language">XML</abbr>.
				</div>
                <div class="project js">
                    <h3>Depressionbot</h3>
                    <ul class="project-nav">
                        <li><a href="http://github.com/reality/depressionbot"><img src="img/source.png" alt="Source code"></a></li>
                    </ul>
                    <p>I collaborated on a couple of modules for the <a href="http://nodejs.org">node.js</a> IRC bot known as depressionbot. Thanks to me, it is possible to interact with the Github API, among other things, via Aber's unofficial IRC channels.</p>
    			</div>
                <div class="project">
                    <h3>PGP key</h3>
                    <ul class="project-nav">
                        <li><a href="http://pgp.mit.edu:11371/pks/lookup?op=vindex&search=0x83D79CE73F41F985"><img src="img/key.png" alt="Key" /></a></li>
                    </ul>
                    My PGP public key is publicly accessible on many keyservers.
                </div>
                <div class="project">
                    <h3>OAOSIDL</h3>
                    <ul class="project-nav">
                        <li><a href="http://oaosidl.org"><img src="img/link.png" alt="Link" /></a>
                    </ul>
                    I contribute to multiple home-grown open-source projects at Aberystwyth, via the <abbr title="'Official' Aberystwyth Open Source International Development League">OAOSIDL</abbr> community.
                </div>
                <div class="project">
                    <h3>Fosdem 2013</h3>
                    <ul class="project-nav">
                        <li><a href="https://fosdem.org/2013"><img src="img/link.png" alt="Link" /></a></li>
                    </ul>
                    In February 2013, I attended Fosdem 2013 in Brussels, where I solidified several passing interests&ndash;such as localisation and copyleft&ndash;into more steady contributions. I am hoping to contribute more to some of the projects I (re)discovered at the conference.
                </div>
            </div>
		</section>
		<section class="box" id="journalist">
			<h2>Writing</h2>
			<p>Since 2010, I have occasionally edited <i><a href="https://en.wikinews.org/">Wikinews</a></i>, the news-driven sister project to Wikipedia, with around <a href="http://en.wikinews.org/wiki/Category:Douglas_Gardner_%28Wikinewsie%29">forty articles</a> to my name, some of which involved original reporting.</p>
			<p>In February 2011, the community entrusted me with an administrator position, which I held until I relinquished it due to inactivity a year later.
		</section>
		<section class="box" id="gamer">
			<h2>Gaming</h2>
			<p>In 2012, I played a major part in the organisation of a worldwide eSports event for the <a href="http://valvesoftware.com">Valve Software</a> title <i><a href="http://teamfortress.com">Team Fortress 2</a></i>. As part of this, I was granted the ability by Valve to administer prizes (in the form of <a href="http://wiki.teamfortress.com/wiki/Ready_Steady_Pan_Participant">in-game medals</a>) to the seventy teams that participated.
		</section>
	</div>
</body>
