<div id="cotntact_form">

<h1> Contact us </h1>
<?php
echo form_open('contact/submit');
echo form_input('name', 'Name');
echo form_input('email', 'Email');
$data = array('name' => 'message', 'cols' => 33, 'rows' => 12);
echo form_textarea($data, 'Message');
echo form_submit('submit', 'Submit');
echo form_close();
?>

</div>
<div>

</div>