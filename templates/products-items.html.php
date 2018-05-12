<h2 class="h2-products">LISTADO PRODUCTO</h2>
<table class="table-products">
	<?= $conexion; ?>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form action="./insert.php" method="post">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">CREATE A PRODUCT</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      		<input type="hidden" id="id-replace">
	        	<label class="name-create">Name</label>
		        <input type="text" name="name-create">
		        <label class="valor-create">Valor</label>
		        <input type="text" name="valor-create">
		        <label class="moneda-create">Moneda</label>
		        <input type="text" name="moneda-create">
		        <label class="caducidad-create">Caducidad</label>
		        <input type="text" name="caducidad-create">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</form>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="labelEdit" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			   <form action="./update.php" method="post">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="labelEdit">EDIT PRODUCT</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
				      	<input type="hidden" id="id-pasable" name="id-pasable" value="<?php echo $row['id_producto']; ?>">
			        	<label class="name-create">Nombre Nuevo</label>
				        <input type="text" value="" name="name-edit">
				        <label class="valor-create">Valor Nuevo</label>
				        <input type="text" name="valor-edit">
				        <label class="moneda-create">Moneda</label>
				        <input type="text" name="moneda-edit">
				        <label class="caducidad-create">Caducidad</label>
				        <input type="text" name="caducidad-edit">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			   </form>
			  </div>
			</div>