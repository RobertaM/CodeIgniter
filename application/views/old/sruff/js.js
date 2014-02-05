var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
	var xmlHttp();

	if(window.ActiveXObject){    //internet explorer
		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHHTP");
		}catch(e){
			xmlHTTP= false;
		}
		else
		{
		try {
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHTTP= false;
		}
		
	}
	
	if(!xmlHttp){
		alert("cant create");
	}else{
		return xmlHttp;
	}
	
function process(){
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){ // ready to communicate
		user = encodeURIComponent(document.getElementById("userInput").value);
		xmlHttp.open("GET","usersearch.php?user="+user, true);
		xml.onreadystatechange = handleServerResponse; // responds to server
		xmlHttp.send(null);
	} else {
		setTimeout('process()', 1000); //palaukti
	}
	
}

}
}