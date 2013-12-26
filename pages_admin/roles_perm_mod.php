<div class="col-md-11">
 	<h2>Permisos por Rol</h2>
 	<h5>Seleccione el rol que desea configurar.</h5><br>
 	<form role="form">
	 	<div class="row">
	 		<div class="col-md-6">
			 	<div class="form-group">
		          <label for="rol">Rol:</label>
		            <select id="rol" class="form-control">
		              <option>Rol 1</option>                          
		              <option>Rol 2</option>
		              <option>Rol 3</option>  
		              <option>Rol 4</option>  
		              <option>Rol 5</option>                                                                          
		            </select>          
		        </div>
	 		</div>
	 		<div class="col-md-6"> <!-- columna vacia -->
	 		</div>
	 	</div>
	 	<div class="row">		
	 		<div class="col-md-12">
	 			Aca poner el array de checkboxes. (completar)
						<!-- <li class="sortable-item" id="A">Sortable item A</li>
						<li class="sortable-item" id="B">Sortable item B</li> -->
<!--						<li class="sortable-item" id="C">Sortable item C</li>
						<li class="sortable-item" id="D">Sortable item D</li> -->
	 		</div>		
	 	</div>
 	</form>	
</div><!-- col-md-11 -->
<script type="text/javascript" src="recursos/jquery/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js">
<script>
  $(function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  });
  </script>