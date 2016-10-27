var config_name = " hey ho ho ho ";

document.addEventListener("DOMContentLoaded", function(event) {
    console.log('setting up the onmessage listener');
        // Read it using the storage API
        chrome.storage.sync.get(['highcontrast', 'screenReader', 'plainText'], function(items) {
            console.log('Settings retrieved', items);
            console.log(JSON.stringify(items));
            config_name = JSON.stringify(items);
        });




});



var requestFilter = {
        urls: ["<all_urls>"]
    },
    extraInfoSpec = ['requestHeaders', 'blocking'],
    handler = function(details) {
        var isRefererSet = false;
        var headers = details.requestHeaders,
            blockingResponse = {};

        for (var i = 0, l = headers.length; i < l; ++i) {
            console.log(headers[i].name + " : " + headers[i].value);
        }
      chrome.storage.sync.get(['highcontrast', 'screenReader', 'plainText'], function(items) {
            console.log('Settings retrieved', items);
            console.log(JSON.stringify(items));
            config_name = JSON.stringify(items);

            

        });
       
        headers.push({
                name: "wREST",
                value: config_name
        });

        
        blockingResponse.requestHeaders = headers;
        return blockingResponse;
    };

chrome.webRequest.onBeforeSendHeaders.addListener(handler, requestFilter, extraInfoSpec);


chrome.tabs.onUpdated.addListener(function(tabId, changeInfo, tab) {
    if (changeInfo.status == 'complete') {


        // Read it using the storage API
        chrome.storage.sync.get(['highcontrast', 'screenReader', 'plainText'], function(items) {
            console.log('Settings retrieved', items);
            console.log(JSON.stringify(items));
            config_name = JSON.stringify(items);
            console.log('Turning ' + tab.url + ' red!');
            chrome.tabs.executeScript({
                code: 'var elm =document.getElementById("wRESTConf"); if(elm === null){}else{elm.innerHTML = ' + "'" + config_name +  "'" + ';}'
            });
        });


    }
})

chrome.browserAction.onClicked.addListener(function(tab) {
    // No tabs or host permissions needed!

    console.log('Turning ' + tab.url + ' red!');
    chrome.tabs.executeScript({
        code: 'document.body.style.backgroundColor="red"'
    });
});
