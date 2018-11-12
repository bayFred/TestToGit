// JavaScript Document
var pageCounter = 1;
var animalContainer = document.getElementById("animal-info");
var btn = document.getElementById("btn");

//btn.addEventListener("click", function(){
	var ourRequest = new XMLHttpRequest();
	ourRequest.open('GET', 'test.json', true)
	ourRequest.onload = function(){
		var ourData = ourRequest.responseText;
		console.log(ourData[0]);
		
	};
	ourRequest.send();
		
//		var ourData = JSON.parse(ourRequest.responseText);
//		renderHTML(ourData);
//	}else{
//		console.log("We connected to server, but it returned an error");
//	}
//};
//		ourRequest.onerror = function(){
//			console.log('Connection error');
//			ourRequest.send();
//			pageCounter++;
//		if(pageCounter > 3){
//			btn.classList.add("hide-me");
//		}
//}
//})