<?php 
require_once 'core/init.php';


if(Session::exists('home')){
	echo Session::flash('home');
}

/*
if(Input::get('u')){
	$db =  DB::getInstance()->get('users', array('username', '=', Input::get('u')));
	var_dump($db);
}
*/
?>
<ul>
<a href="login.php"><li>Log in</li></a>

<a href="register.php"><li>Register</li></a>
</ul>