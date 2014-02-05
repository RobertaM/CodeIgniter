function aloha(id){
	console.log(document.getElementById("ajax-button"));
	console.log(id);
	getData("http://localhost/CodeIgniter/index.php/maindatacontroller/view/" + id + "/?ajax=TRUE", "content", 'ajax-button')
}
function getData(url, target, remove) {
	var xmlhttp;
	if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
	// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
			remove = document.getElementById(remove);
			remove.parentNode.removeChild(remove);
			document.getElementById(target).innerHTML += xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}