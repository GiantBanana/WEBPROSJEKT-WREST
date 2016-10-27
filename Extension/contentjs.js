console.log("hey");
document.getElementById("uai_extension_info").InnerHTML = "meow";
chrome.tabs.executeScript(null, {file: "content_script.js"});