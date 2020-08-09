<br><br><h2><?=$name?></h2>
<a class="btn btn-success" href="<?php echo site_url('/users/create');?>">Crea un nuevo usuario</a>
<?php if ($flag):?>
<?php foreach($users as $user):?>
<h3><?php echo 'Nombre:'. $user->name;?></h3>
<br>
<?php echo 'Email:'. $user->email;?>
<br>
	<a class="btn btn-default" href="<?php echo site_url('/users/'.$user->slug);?>">Ver información/Eliminar/Editar</a></p>
<?php endforeach;?>
<?php endif;?>
<?=$this->pagination_bootstrap->render()?>

