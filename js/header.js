$(document).ready(function(){
	/*if($page == 1){*/
		$('header').addClass('header2');
		
		$(window).scroll(function(){
			if( $(this).scrollTop() > 0 ){
				$('header').removeClass('header2');
			} else {
				$('header').addClass('header2');
			}
		});
	/*}*/
});

$(document).ready(function(){
	if (screen.width >= 800){
		if($page == 1){
			$('header').addClass('header3');
			$('.btn-cotizar').removeClass('btn-outline-primary');
			$('.btn-cotizar').addClass('btn-light');
			
			$(window).scroll(function(){
				if( $(this).scrollTop() > 0 ){
					$('header').removeClass('header3');
					$('.btn-cotizar').addClass('btn-outline-primary');
					$('.btn-cotizar').removeClass('btn-light');
				} else {
					$('header').addClass('header3');
					$('.btn-cotizar').addClass('btn-light');
					$('.btn-cotizar').removeClass('btn-outline-primary');
				}
			})
		} else {
			$('header').removeClass('header3');
			$('header').addClass('header2');
			$('.btn-cotizar').addClass('btn-primary');
			$('.btn-cotizar').removeClass('btn-outline-primary');
			$('.btn-cotizar').removeClass('btn-ligh');
		}
	} else if (screen.width < 800){
		$('.btn-cotizar').addClass('btn-primary');
		$('.btn-cotizar').removeClass('btn-outline-primary');
		$('.btn-cotizar').removeClass('btn-ligh');
	}
});

$(document).ready(function(){
	switch ($page) {
		case 1:
			recolor();
			$('#hp1').addClass('active');
		  	break;
		case 2:
			recolor();	
			$('#hp2').addClass('active');
			break;
		case 3:
			recolor();	
			$('#hp3').addClass('active');
			break;
		case 4:
			recolor();	
			$('#hp4').addClass('active');
			break;
		case 5:
			recolor();	
			$('#hp5').addClass('active');
			break;
		case 6:
			recolor();	
			$('#hp6').addClass('active');
			break;
		default:
		  //Declaraciones ejecutadas cuando ninguno de los valores coincide con el valor de la expresión
		  break;
	  }
   
});
var seleccion = function() { 
	$('#hp1').removeClass('active');
	$('#hp2').removeClass('active');
	$('#hp3').removeClass('active');
	$('#hp4').removeClass('active');
	$('#hp5').removeClass('active');
}
var recolor = function() { 
	$('#hp1').removeClass('active');
	$('#hp2').removeClass('active');
	$('#hp3').removeClass('active');
	$('#hp4').removeClass('active');
	$('#hp5').removeClass('active');
}
