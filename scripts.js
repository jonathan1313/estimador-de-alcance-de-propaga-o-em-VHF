function calcular() {
	var antena1 = document.getElementById('primeira-antena').value;
	var antena2 = document.getElementById('segunda-antena').value;

	var d1, d2, visada;

	if (antena1!=0 && antena2!=0) {
		
		d1 = Math.round(Math.sqrt(12.7 * antena1));
		d2 = Math.round(Math.sqrt(12.7 * antena2));
		visada = d1+d2;

		jQuery("#visada").html('Visada: '+visada+' m');
		jQuery("#d1").html('Alcance 1ª antena: '+d1+' m');
		jQuery("#d2").html('Alcance 2ª antena: '+d2+' m');
		$("#painel-resultado").show();

	} else {
		$("#painel-resultado").hide();
	}

}