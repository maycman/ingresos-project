$(document).ready(function ()
{
	//Implementación de juego de clases
	var pag = location.href.substring(location.href.lastIndexOf('/')+1, location.href.lastIndexOf(''));
	$('.date').datepicker('update', new Date());
});