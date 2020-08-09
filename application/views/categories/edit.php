<br><br><h2><?=$name?></h2>
<?php echo form_open('categories/update');?>
<?php echo validation_errors();?>
<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $category['id'];?>"
	<label>Nombre</label>
	<input type="text" class="form-control" name="name" placeholder="Nombre de la categoría" value="<?php echo $category['name'];?>">
</div>
<div class="form-group">
	<label>Descripción</label>
	<input type="email" class="form-control" name="description" placeholder="Agrega la Descripción" value="<?php echo $category['description'];?>">
</div>
<button type="submit" class="btn btn-default">Aceptar</button>
</form>
