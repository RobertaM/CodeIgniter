<?php
header('Contact-Type: text/xml');
echo <?xml version="1.0" encoding="UTF-8" standalone="yes" ?>;

echo '<response>';
	$user=$_GET['food'];
	$userArray= array('tom', 'jon', 'dom', 'non');
	if(in_array($user, $userArray));
		echo 'we do have' $user;
	elseif(user=="")
		echo 'enter user name';
	else
		echo 'no such user';

echo '</response>';

?>