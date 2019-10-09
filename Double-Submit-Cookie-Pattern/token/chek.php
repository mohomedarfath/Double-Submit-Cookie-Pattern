<?php

if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'pass'){
		echo '<h3>Successfully logged in</h3>';
		//genarate set session cookie and csrfTokenCookie
		session_start();
        $_SESSION['token'] = md5(uniqid(rand(), TRUE));
		$session_id = session_id();
		setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
		setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
else{
	header('Location:./login.php');
}

?>