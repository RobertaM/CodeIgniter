<h1> Create an Account </h1>

<fieldset>
	<legend> Personal Information</legend>

	<?php
		echo form_open('login/create_member');
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
		echo form_submit('submit', 'Create account');	
		?>

		<a id="back" href="http://localhost/CodeIgniter/"> Grizti atgal</a>
		
		<?php echo validation_errors('<p class="error">');?>


</fieldset>