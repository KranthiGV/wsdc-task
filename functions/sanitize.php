<?php 

function escape($string){
	// escape the user entered strings
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}


