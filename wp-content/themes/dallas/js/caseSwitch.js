// JavaScript Document

window.onload=onAllLoaded;

function onAllLoaded(){
	var ca=document.getElementById("clientsActive");
	var pa=document.getElementById("projectsActive");
	
	var cm=document.getElementById("clientMenu");
	var pm=document.getElementById("projectMenu");
	
	ca.style.display="block";
	pa.style.display="none";
	cm.style.display="block";
	pm.style.display="none";
}
			
			
function setTo(input){
	
	var ca=document.getElementById("clientsActive");
var pa=document.getElementById("projectsActive");

var cm=document.getElementById("clientMenu");
var pm=document.getElementById("projectMenu");
	
	switch(input){
		case "clients" :
			ca.style.display="block";
			pa.style.display="none";
			cm.style.display="block";
			pm.style.display="none";
		break;
		case "projects" :
			ca.style.display="none";
			pa.style.display="block";
			cm.style.display="none";
			pm.style.display="block";
		break;
	}
}