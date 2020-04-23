<?php 
function isSessionStart(){
	return isset($_SESSION["user"]);
}
function sessionValidate(){
	if(!isSessionStart()){
		header("Location:".URL_PROY);
	}

}
 ?>