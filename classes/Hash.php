<?php 
/*
Uses sha-256
Salt is randomly generated using mcrypt function ( Would it be better to have a readable -alphanumeric- salt? )	
*/
class Hash{
	public static function make($string, $salt = ''){
		return hash('sha256', $string . $salt );
	}
	public static function salt($length){
		
		return mcrypt_create_iv($length);
	}

}

