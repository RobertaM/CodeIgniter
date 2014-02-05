<h2>create User account</h2>

<?php echo validation_errors(); ?>

<?php 
$this->load->helper('url');
echo form_open(base_url('index.php/loginController/createUser')); ?>

	<fieldset>
	<legend> Personal Information</legend>

	<?php
		echo form_input('first_name', '','placeholder="First Name"');
		echo form_input('last_name', '','placeholder="Last Name"');
		echo form_input('email_address', '', 'placeholder= "Email Address"');

	?>
</fieldset>

<fieldset>
<legend> Login info </legend>
		<?php
		echo form_input('username', '', 'placeholder="Username"');
		echo form_password('password', '', 'placeholder="Password"');
		echo form_password('password2', '', 'placeholder="Confirm password"');
		
		?>
</fieldset>
<fieldset>
		<?php echo form_submit('submit', 'Registruotis'); ?>

		<a id="back" href="http://localhost/CodeIgniter/"> Grižti atgal</a>
		
		<?php 
		echo form_close();
		echo validation_errors('<p class="error">');?>


</fieldset>

