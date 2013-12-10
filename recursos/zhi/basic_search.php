<form role="form" id="basic_search" name="basic_search" method="GET" onsubmit="return false">
	<div class="row">
		<div class="col-md-5">	
			<div class="form-group">
				<div class="input-group">
				    <input type="text" class="form-control input-sm" id="txt_search" name="txt_search" value="<?php echo $_GET['txt_search'];?>">
				      <div class="input-group-btn">
				        <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" name="select_field"> <!-- <span class="glyphicon glyphicon-search"></span> --> Buscar <span class="caret"></span></button>
				        <ul class="dropdown-menu pull-right">
				          <li onclick="$('#basic_search').submit();"><a href="#"> por: Nombre</a></li>        	
				          <li><a href="#"> por: Usuario</a></li>
				          <li><a href="#"> por: Rol</a></li>
				        </ul>
				      </div><!-- /btn-group -->
				</div><!-- /input-group -->
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
    $("ul.dropdown-menu > li").click(function() {
        target = $(this).text();
//        alert(target);
	variable = $('#basic_search').serialize();

	variable += "&select_field=" + target.substr(target.indexOf(":")+2);
  $.ajax({
    url: '<?php echo $_GET['callerURL']; ?>',
    type: 'get',
   data: variable,
   success: function(response, textStatus, jqXHR){
      $('#cuerpo').html(response);   //select the id and put the response in the html
    },
   error: function(jqXHR, textStatus, errorThrown){
      console.log('error(s):'+textStatus, errorThrown);
   }
 });
 });
</script>