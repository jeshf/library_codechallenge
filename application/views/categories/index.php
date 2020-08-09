<br><br><h2><?=$name?></h2>
<a class="btn btn-success" href="<?php echo site_url('/categories/create');?>">Crea una nueva categoria</a>
<?php if ($flag):?>
	<?php foreach($categories as $category):?>
		<h3><?php echo 'Nombre:'. $category->name;?></h3>
		<br>
		<?php echo 'Descripción:'. $category->description;?>
		<br>
		<a class="btn btn-default" href="<?php echo site_url('/categories/'.$category->slug);?>">Ver información/Eliminar/Editar</a></p>
	<?php endforeach;?>

<?php endif;?>
<?=$this->pagination_bootstrap->render()?>

