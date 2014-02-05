<h2> Susisiekite su mumis </h2>

<?php echo validation_errors();?>
<?php $this->load->helper('url');
echo form_open(base_url('index.php/mainDataController/createData/2')); 
$Data = gmdate("Y-M-d H:i:s"); 
echo form_label($Data);?>


<fieldset>
	<?php
		echo form_input('Pavadinimas',"", 'placeholder="Problemos pavadinimas"');
		echo form_textarea('Postas',"",'placeholder="Problema"');
	?>

 </fieldset>
 <fieldset>
		<?php echo form_submit('submit', 'Išsiūsti', 'create news item'); ?>

		<a id="back" href="http://localhost/CodeIgniter/index.php/loginController/isLoggedIn"> Grižti atgal</a>
		
		<?php 
		echo form_close();
		echo validation_errors('<p class="error">');?>


</fieldset>