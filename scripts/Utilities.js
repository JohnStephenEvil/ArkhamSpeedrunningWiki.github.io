let canUseStorage = true;
let style = "dark";
if(typeof(Storage) == "undefined"){
	console.log("This browser does not support web storage!");
	canUseStorage = false;
}else{
	style = localStorage.getItem("style");
	if(style != "light"){
		style = "dark";
	}
}

function setStyle(){
	let styleButton = document.getElementById("style-button");

	document.getElementById("body-main").className = style;

	if(style == "light"){
		styleButton.innerHTML = "Day Mode";
	}else{
		styleButton.innerHTML = "Night Mode";
	}

	if(canUseStorage){
		localStorage.setItem("style", style);
	}
}

function toggleStyle(){
	if(style == "light"){
		style = "dark";
	}else{
		style = "light";
	}
	setStyle();
}
