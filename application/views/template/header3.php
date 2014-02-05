<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Dremo </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dremo</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/java.js')?>" >  </script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main2.js')?>" >  </script>
<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/css/default.css')?> media="screen"/>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Dremo</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="active"><a href="http://localhost/CodeIgniter/index.php/loginController/isLoggedIn" accesskey="1" title="">Pagrindinis</a></li>
					<li><a href="http://localhost/CodeIgniter/index.php/mainDataController/createData/0" accesskey="2" title="">Nauja žinutė</a></li>
					<li><a href="http://localhost/CodeIgniter/index.php/mainDataController/viewUserPosts" accesskey="" title="">Žinutės</a></li>
					<li><a href="http://localhost/CodeIgniter/index.php/mainDataController/contact" accesskey="4" title="">Problemos2</a></li>
					<li><a href="http://localhost/CodeIgniter/index.php/loginController/logout" accesskey="5" title="">Atsijungti</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="banner" class="container"><img src=<?php echo base_url('assets/css/images/MIAU.jpg')?> width="1000" height="400" alt="" /></div>
			<div id="log">  <h4> Jūs esate prisijungęs kaip : <?php echo $user[0]['username'] ?> </h4></div>
		<div id="page" class="container">
		<div id="content">