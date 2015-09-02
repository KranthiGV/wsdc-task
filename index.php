<?php 
require_once 'core/init.php';


if(Session::exists('home')){
	echo Session::flash('home');
}

if(Input::get('u')){
	$db =  DB::getInstance()->get('users', array('username', '=', Input::get('u')));
	var_dump($db);
}