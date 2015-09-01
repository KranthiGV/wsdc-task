<?php 

class Input {
	public static function exists($type = 'POST'){
		switch($type){
			case 'POST':
				if (!empty($_POST)) return true;
				else return false;
			break;
			case 'GET':
				if (!empty($_GET)) return true;
				else return false;
			
			break;
			default:
				return false;
			break;
		
		}
	
	}
	
	public static function get($item){
		if(isset($_POST[$item])){
			return $_POST[$item];
		
		} else if(isset($_GET[$item])) {
			return $_GET[$item];
		} else {
			return '';
		}
	}

}

