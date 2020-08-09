<br><br><h2><?=$name?></h2>
<?php echo form_open('users/create');?>
<?php echo validation_errors();?>
<div class="form-group">
	<label>Nombre</label>
	<input type="text" class="form-control" name="name" placeholder="Agrega el nombre">
</div>
<div class="form-group">
	<label>Email</label>
	<input type ="email" class="form-control" name="email" placeholder="Inserta un email valido">
</div>

<button type="submit" class="btn btn-default">Aceptar</button>
</form>
