<br><br><h2><?=$name?></h2>
<?php echo form_open('books/create');?>
<?php echo validation_errors();?>
<div class="form-group">
	<label>Nombre</label>
	<input type="text" class="form-control" name="name" placeholder="Agrega el nombre">
</div>
<div class="form-group">
	<label>Autor</label>
	<input type ="text" class="form-control" name="author" placeholder="Autor del libro">
</div>
<div class="form-group">
	<label>Fecha de publicación</label>
	<input type ="date" class="form-control" name="published_date" placeholder="Elige la fecha de publicación">
</div>
<div class="">
	<label>Marca la casilla si el libro está disponible</label>
	<input type ="checkbox" class="" name="availability">
</div>
<div class="form-group">
	<label>Usuario quien tiene el libro en su posesión</label>
	<select>
		<option selected>
		</option>
		<?php foreach($users as $user):?>
		<option value="<?php echo $user['id']?>">
			<?php echo	$user['name']	?>
		</option>
		<?php endforeach;?>
	</select>
</div>
<button type="submit" class="btn btn-default">Aceptar</button>
</form>
