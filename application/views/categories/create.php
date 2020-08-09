<br><br><h2><?=$name?></h2>
<?php echo form_open('categories/create');?>
<?php echo validation_errors();?>
<div class="form-group">
	<label>Nombre</label>
	<input type="text" class="form-control" name="name" placeholder="Agrega el nombre">
</div>
<div class="form-group">
	<label>Descripción</label>
	<input type ="text" class="form-control" name="description" placeholder="Escribe la descripcion">
</div>
<button type="submit" class="btn btn-default">Aceptar</button>
</form>
