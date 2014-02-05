<h2> Prisijunkite </h2>

<?php echo validation_errors();?>
<?php $this->load->helper('url');
echo form_open(base_url('index.php/loginController/submit'));
?>
<fieldset>
	<?php
	echo form_input('username','', 'placeholder="Vartotojo vardas"');
	echo form_password('password', '', 'placeholder="Vartotojo slaptažodis"');
	?>
</fieldest>


<fieldest>
</br>
</br>
	<?php echo form_submit('submit', 'Prisijunkti'); ?>
		<a id="back" href="http://localhost/CodeIgniter/"> Grižti atgal</a>
	<?php 
		echo form_close();
		echo validation_errors('<p class="error">');
	?>
</fieldset>