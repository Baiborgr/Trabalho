$('.islide > :first').addClass('ativo');

function rodaSlide(){
	var slideAtivo = $('.islide > .ativo'),
		proximoSlide = slideAtivo.next();

	if(proximoSlide.length == 0){
		proximoSlide = $('.islide > :first');	
	}
	slideAtivo.removeClass('ativo');
	proximoSlide.addClass('ativo');
}

setInterval(rodaSlide, 2000);











