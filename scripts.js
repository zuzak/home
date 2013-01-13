$(document).ready(function() {
	$('#project-list').isotope({
		itemSelector : '.project',
		animationEngine : 'jquery',
	});
	$('.css').mouseover(function(){
		$('#project-lang-css').css('background-color','#FFCCFF');
	});

	$('.css').mouseout(function(){
		$('#project-lang-css').css('background-color','transparent');
	});
	$('.js').mouseover(function(){
		$('#project-lang-js').css('background-color','#FFFFCC');
	});
	$('.js').mouseout(function(){
		$('#project-lang-js').css('background-color','transparent');
	});
	$('.php').mouseover(function(){
		$('#project-lang-php').css('background-color','#CCFFFF');
	});
	$('.php').mouseout(function(){
		$('#project-lang-php').css('background-color','transparent');
	});
	$('.perl').mouseover(function(){
		$('#project-lang-perl').css('background-color','#CCFFCC');
	});
	$('.perl').mouseout(function(){
		$('#project-lang-perl').css('background-color','transparent');
	});
	$('#project-lang-perl').click(function(){
		$('#project-list').isotope({filter: '.perl'});
	});
	$('#project-lang-php').click(function(){
		$('#project-list').isotope({filter: '.php'});
	});
	$('#project-lang-js').click(function(){
		$('#project-list').isotope({filter: '.js'});
	});
	$('#project-lang-css').click(function(){
		$('#project-list').isotope({filter: '.css'});
	});
	$('#project-lang-all').click(function(){
		$('#project-list').isotope({filter: '*'});
	});
	$('#project-lang-css').mouseover(function(){
		$('.css').css('background-color','#FFCCFF');
	});
	$('#project-lang-css').mouseout(function(){
		$('.css').css('background-color','transparent');
	});
	$('#project-lang-js').mouseover(function(){
		$('.js').css('background-color','#FFFFCC');
	});
	$('#project-lang-js').mouseout(function(){
		$('.js').css('background-color','transparent');
	});
	$('#project-lang-perl').mouseover(function(){
		$('.perl').css('background-color','#CCFFCC');
	});
	$('#project-lang-perl').mouseout(function(){
		$('.perl').css('background-color','transparent');
	});
	$('#project-lang-php').mouseover(function(){
		$('.php').css('background-color','#CCFFFF');
	});
	$('#project-lang-php').mouseout(function(){
		$('.php').css('background-color','transparent');
	});
});
