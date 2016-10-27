
 document.addEventListener("DOMContentLoaded", function(event) {

// Read it using the storage API
        chrome.storage.sync.get(['highcontrast', 'screenReader', 'plainText'], function(items) {
        	if('highcontrast' in items){
        		console.log('Settings retrieved', items);
            	console.log(JSON.stringify(items));

            	if(items.highcontrast === "on"){
            		document.getElementById("highcontrast").checked = true;
            	}else{
            		document.getElementById("highcontrast").checked = false;
            	}

            	if(items.screenReader === "on"){
            		document.getElementById("screenreader").checked = true;
            	}else{
            		document.getElementById("screenreader").checked = false;
            	}

            	if(items.plainText === "on"){
            		document.getElementById("plaintext").checked = true;
            	}else{
            		document.getElementById("plaintext").checked = false;
            	}

        	}

        });

    var btn = document.getElementById("debugBtn");
    btn.addEventListener("click", SendMessage);
  });

function SendMessage(){
	var highContrast = document.getElementById("highcontrast");
	if(highContrast.checked){
		highContrast = "on";
	}else{
		highContrast = "off";
	}
	var screenReader = document.getElementById("screenreader");
	if(screenReader.checked){
		screenReader = "on";
	}else{
		screenReader = "off";
	}
	var plainText = document.getElementById("plaintext");
	if(plainText.checked){
		plainText = "on";
	}else{
		plainText = "off";
	}
	console.log(highContrast + " : " + screenReader + " : " + plainText + ":");
	console.log(plainText);
	// Save it using the Chrome extension storage API.
    chrome.storage.sync.set({'foo': 'hello', 'highcontrast': highContrast, 'screenReader':screenReader, 'plainText':plainText}, function() {
      console.log('Settings saved');
    });

    
}