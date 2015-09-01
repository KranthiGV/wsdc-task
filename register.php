<?php 
require_once 'core/init.php';

if(Input::exists()){
	if(Token::check(Input::get('token'))){
		echo "CSRF isn't done!";
		//echo Input::get('username');
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username' => array(
				'required' => true,
				'min' => 2,
				'max' => 20,
				'unique' => 'users'
			),
			'password' => array(
				'required' => true,
				'min' => 8
			),
			'password_again' => array(
				'required' => true,
				'matches' => 'password'
			),
			'name' => array(
				'required' => true,
				'min' => 2,
				'max' => 30
				
			)
		));
		if($validation->passed()){
			//passed
			Session::flash('success', 'Registration successful!');
			header('Location: index.php');
			
		} else {
			foreach($validation->errors() as $error){
				  echo $error, '<br>';
			}
		}
	}
}

?>

<form action = "" method = "POST">
	<div class = "field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
	</div>
	<div class = "field">
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
	</div>
	<div class = "field">
		<label for="password_again">Enter password again</label>
		<input type="password" name="password_again" id="password_again">
	</div>
	<div class = "field">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" value = "<?php echo escape(Input::get('username')); ?>">
	</div>
	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<input type="submit" value="Register">
</form> 