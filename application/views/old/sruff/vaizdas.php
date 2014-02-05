<html>
<head>
<title> </title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
	<body>

		<script>
		function mano_funkcija(){
			$.get('http://localhost/CodeIgniter/index.php/kontroleris/kazkas', function(data) {
				$('#mano').append(data.random + " ");
			});
		}
		</script>
		
			<input type="button" onclick="mano_funkcija()" value="mygtukas">

			<div id="mano">


			</div>
		
	</body>
</html>