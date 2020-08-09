<br><br><h2><?=$name?></h2>
<a class="btn btn-success" href="<?php echo site_url('/books/create');?>">Crea un nuevo libro</a>
<?php if ($flag):?>
<?php foreach($books as $book):?>
<h3><?php echo 'Nombre:'. $book->name;?></h3>
<br>
<?php echo 'Autor:'. $book->author;?>
<br>
	<a class="btn btn-default" href="<?php echo site_url('/books/'.$book->slug);?>">Ver información/Eliminar/Editar</a></p>
<?php endforeach;?>
<?php endif;?>
<?=$this->pagination_bootstrap->render()?>

