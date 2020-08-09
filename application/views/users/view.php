<br><br>
	<h3><?php echo $user['name'];?></h3>
<br>
	<?php echo $user['email'];?>
	<br>
<a class="btn btn-default pull-left" href="/library/users/edit/<?php echo $user['slug'];?>">Editar</a>
<?php echo form_open('/users/delete/'.$user['id']);?>
<input type="submit" value="Borrar" class="btn btn-danger">
</form>


