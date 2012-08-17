// JavaScript Document

var currentVideo;

function setVideo(videoID){
	currentVideo=videoID;
	sendVideoToFlash(videoID);
	
};


function sendVideoToFlash(id){
	
	
	var flashMovie=getFlashMovieObject("ytvPlayer");
	var treturn=flashMovie.sendVideoToFlash(id);
	
	
};

function getFlashMovieObject(movieName){

	
	if (window.document[movieName]){
		return window.document[movieName];
	}
	if (navigator.appName.indexOf("Microsoft Internet")==-1){
		if (document.embeds && document.embeds[movieName])
			return document.embeds[movieName];
		}
			else // if (navigator.appName.indexOf("Microsoft Internet")!=-1)
		{
		return document.getElementById(movieName);
		
		}
}

