function keychange(lang, color) {
	$('#project-lang-'+lang).css('background-color',color);
}
function projectchange(lang, color) {
	$('.'+lang).css('background-color',color);
}
function filter(lang) {
	$('#project-list').isotope({filter: '.'+lang});
}
$(document).ready(function() {
	$('#project-list').isotope({
		itemSelector : '.project',
		animationEngine : 'jquery',
	});
	$('#project-lang-all').click(function(){
		$('#project-list').isotope({filter: '*'});
	});
	
	$('.python').mouseover(function(){keychange('python','#FFCCCC');});
	$('.python').mouseout (function(){keychange('python','transparent');});
	$('#project-lang-python').mouseover(function(){projectchange('python','#FFCCCC');});
	$('#project-lang-python').mouseout(function(){projectchange('python','transparent');});
	$('#project-lang-python').click(function(){filter('python')});

	$('.bash').mouseover(function(){keychange('bash','#CCFFCC');});
	$('.bash').mouseout (function(){keychange('bash','transparent');});
	$('#project-lang-bash').mouseover(function(){projectchange('bash','#CCFFCC');});
	$('#project-lang-bash').mouseout(function(){projectchange('bash','transparent');});
	$('#project-lang-bash').click(function(){filter('bash')});
	
	$('.php').mouseover(function(){keychange('php','#CCCCFF');});
	$('.php').mouseout (function(){keychange('php','transparent');});
	$('#project-lang-php').mouseover(function(){projectchange('php','#CCCCFF');});
	$('#project-lang-php').mouseout(function(){projectchange('php','transparent');});
	$('#project-lang-php').click(function(){filter('php')});
	
	$('.jquery').mouseover(function(){keychange('jquery','#FFFFCC');});
	$('.jquery').mouseout (function(){keychange('jquery','transparent');});
	$('#project-lang-jquery').mouseover(function(){projectchange('jquery','#FFFFCC');});
	$('#project-lang-jquery').mouseout(function(){projectchange('jquery','transparent');});
	$('#project-lang-jquery').click(function(){filter('jquery')});
});
