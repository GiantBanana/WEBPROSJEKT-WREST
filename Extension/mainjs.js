
document.addEventListener('DOMContentLoaded', function (){
	var btn = document.getElementById("sendmessage");
	btn.addEventListener('click', sendMessage);
});

function sendMessage(){
	document.getElementById("uai_extension_info").InnerHTML = "hey bebby";
}