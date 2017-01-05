// autocompletion
function autocomplet() {
	var min_length = 2; // nombre de caractère avant lancement recherch 
	var keyword = $('#client').val();  // country_id fait référence au champ de recherche puis lancement de la recherche grace ajax_refresh
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh2.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#nomclient_list').show();
				$('#nomclient_list').html(data);
			}
		});
	} else {
		$('#nomclient_list').hide();
	}
}

// Lors du choix dans la liste
function set_item(item,id) {
	$('#client').val(item);
	$('#idclient').val(id);
	$('#nomclient_list').hide();
}