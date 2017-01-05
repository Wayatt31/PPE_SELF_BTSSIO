// autocompletion
function autocomplet() {
	var min_length = 2; // nombre de caractère avant lancement recherch 
	var keyword = $('#produit').val();  // country_id fait référence au champ de recherche puis lancement de la recherche grace ajax_refresh
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#libproduit_list').show();
				$('#libproduit_list').html(data);
			}
		});
	} else {
		$('#libproduit_list').hide();
	}
}

// Lors du choix dans la liste
function set_item(item,id) {
	$('#produit').val(item);
	$('#idproduit').val(id);
	$('#libproduit_list').hide();
}