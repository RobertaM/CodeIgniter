<h2> Sukurkite žinutę </h2>

<?php echo validation_errors();?>
<?php $this->load->helper('url');
echo form_open(base_url('index.php/mainDataController/createData/1')); 
$Data = gmdate("Y-m-d H:i:s"); 
echo form_label($Data);?>

<fieldset>
	<?php
		echo form_input('Pavadinimas', $test['users'][0]['pavadinimas']);
		echo form_textarea('Postas', $test['users'][0]['Postas']);
		echo form_hidden('Autorius', $test['users'][0]['Autorius']);
		echo form_hidden('ID',$test['users'][0]['id']);
	?>

 </fieldset>
 <fieldset>
		<?php echo form_submit('submit', 'Išsiūsti'); ?>

		<a id="back" href="http://localhost/CodeIgniter/index.php/loginController/isLoggedIn"> Grižti atgal</a>
		
		<?php 
		echo form_close();
		echo validation_errors('<p class="error">');?>


</fieldset>




	