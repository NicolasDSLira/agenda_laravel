// script.cadastro.js


$('#form_cadastro_ctt').on('submit', function(e) {

	const name = $('#form_name_ctt').val();

	const email = $('#form_email_ctt').val();

	const telefone = $('#form_number_ctt').val();

	var valida = 0;

	if (name.length > 3) {
		valida++;
		$('#erro_name').html('');
	} else {
		valida--;
		$('#erro_name').html('Nome inválido');
	}

	if (email.length > 3){
		valida++;
		$('#erro_email').html('');
	}else{
		valida--;
		$('#erro_email').html('E-mail inválido');
	}

	if (telefone.length != '') {
		valida++;
		$('#erro_number').html('');
	} else {
		valida--;
		$('#erro_number').html("Telefone inválido");
	}

	if (valida == 3) {
		e.submit();
	}else{
		e.preventDefault();
	}
});