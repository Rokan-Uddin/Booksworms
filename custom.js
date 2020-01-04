$('#searchid').keyup( function(){
	var valur =$('#searchid').val();

	$.ajax({
		url:'search.php',
		data:'usearch='+valur,
		success:function(data) {
			$('#feedback').html(data);
		}
	}); 
} );