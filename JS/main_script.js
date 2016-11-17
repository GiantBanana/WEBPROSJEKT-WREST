document.addEventListener("DOMContentLoaded", function(event) {
  console.log("DOM fully loaded and parsed");
  root = document.querySelector(":root");
  readCookie();
});
var root;
var fontSize = 16;

function readCookie(){
  var ca = document.cookie.split(';');
  for(var i = 0; i <ca.length; i++) {
      var attribute = ca[i].split(':');

      if(attribute[0] === "fontSize"){
        root.style.fontSize = attribute[1];
        var tempString = attribute[1].trim();
        var incSize = tempString.substring(0, tempString.length - 2);
        console.log(tempString[1] + " " + incSize);
        fontSize = incSize;
      }
  }
  return "";
}

function descreaseFont(){
  root.style.fontSize = --fontSize + "px";
  document.cookie = "fontSize: " + fontSize + "px;";
}

function increaseFont(){
  root.style.fontSize = ++fontSize + "px";
  document.cookie = "fontSize: " + fontSize + "px;";
}
