function keychange(lang, color) {
	$('#project-lang-'+lang).css('background-color',color);
}
function projectchange(lang, color) {
	$('.'+lang).css('background-color',color);
}
$(document).ready(function() {
	$('#project-list').isotope({
		itemSelector : '.project',
		animationEngine : 'jquery',
	});
	
	$('.python').mouseover(function(){keychange('python','#FFCCCC');});
	$('.python').mouseout (function(){keychange('python','transparent');});
	$('#project-lang-python').mouseover(function(){projectchange('python','#FFCCCC');});
	$('#project-lang-python').mouseout(function(){projectchange('python','transparent');});

	$('.bash').mouseover(function(){keychange('bash','#CCFFCC');});
	$('.bash').mouseout (function(){keychange('bash','transparent');});
	$('#project-lang-bash').mouseover(function(){projectchange('bash','#CCFFCC');});
	$('#project-lang-bash').mouseout(function(){projectchange('bash','transparent');});
	
});
