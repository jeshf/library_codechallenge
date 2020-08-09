<br><br><h2><?=$name?></h2>
<?php echo form_open('users/update');?>
<?php echo validation_errors();?>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $user['id'];?>"
	<label>Nombre</label>
	<input type="text" class="form-control" name="name" placeholder="Agrega tu nombre" value="<?php echo $user['name'];?>">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="email" class="form-control" name="email" placeholder="Agrega tu email" value="<?php echo $user['email'];?>">
</div>
<button type="submit" class="btn btn-default">Aceptar</button>
</form>
