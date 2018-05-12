function consulta(id){
			$.ajax({
				type: 'POST',
				cache: false,
				url: 'update.php',
				data: {id_producto : id},
				sucess: function(data){
					$('#edit').html(data).modal("show");
					alert("Funciona")
				}
				error: function(){
					alert("No funciona");
				}
			});
		}

		consulta();