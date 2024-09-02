function transfer() {
	chrome.tabs.query({ active: true, currentWindow: true }, function (tabs) {
		var tablink = tabs[0].url;
		$("#p1").text("The URL being tested is - " + tablink);

		var xhr = new XMLHttpRequest();
		var params = "url=" + tablink;
		var markup = "url=" + tablink + "&html=" + document.documentElement.innerHTML;
		xhr.open("POST", "http://localhost/project_phish/clientServer.php", false);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send(markup);

		alert(xhr.responseText);
		$("#div1").text(xhr.responseText);
		return xhr.responseText;
	});
}

$(document).ready(function () {
	$("button").click(function () {
		var val = transfer();
	});
});

chrome.tabs.query({ active: true, currentWindow: true }, function (tabs) {
	var tablink = tabs[0].url;
	$("#p1").text("The URL being tested is - " + tablink);
});
