<?php 
class Redirect {
	public static function to($location = null){
	
		if($location){
			if($location == 404){
				include 'includes/errors/404.php';
				exit();
			}
			header('Location: ' . $location);
			exit();
		}
	
	}
	
}


