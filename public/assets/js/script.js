// script.js

$('#search_form').on('submit',function(e) {
		e.preventDefault();
		const value = $('#search_bar').val();
		window.location.href = '/pesquisa/query='+value;
});

$('#add_ctt').on('click',function(){
	window.location.href = $(this).data('href');
});

$('.delete').on('click', function() {
	var id = $(this).data('id');
	window.location.href = '/destruir/'+id;
});

