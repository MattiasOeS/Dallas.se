<?
if(isset($_GET["mode"])&&$_GET["mode"]=="dev"){
	setcookie("dev","true", time()+3600*24*7, "/");
	header("Location: /dev");	
}else if(isset($_GET["mode"])&&$_GET["mode"]=="live"){
	setcookie("dev", "", time()-1000, "/");
	header("Location: /dev");
}
if(isset($_COOKIE["dev"])){
	echo "DEVELOPMENT MODE: ON | <a href='?mode=live'>SWITCH</a>";
}else{
	echo "DEVELOPMENT MODE: OFF | <a href='?mode=dev'>SWITCH</a>";
}
?>