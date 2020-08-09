<br><br>
	<h3><?php echo $category['name'];?></h3>
<br>
	<?php echo $category['description'];?>
	<br>
<a class="btn btn-default pull-left" href="/library/categories/edit/<?php echo $category['slug'];?>">Editar</a>
<?php echo form_open('/categories/delete/'.$category['id']);?>
<input type="submit" value="Borrar" class="btn btn-danger">
</form>


