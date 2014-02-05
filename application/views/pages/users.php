<?php foreach ($users as $us): ?>

	<a href="<?php echo base_url('index.php/mainDataController/deleteUser/'.$us['id'])?>" class="delete"> delete </a> 

	<?php echo $us['username']?>
	<br>

<?php endforeach ?>