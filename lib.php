<?php 
	session_start();

	function login_form()
	{
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM tbl_user WHERE username='$username' and password = '$password'";
			$result = Query($sql);

			if ($result == true) {
				if (row_count($result) > 0) {
					$_SESSION["login"] = 'login';
					header("Location: ownerpage/ownerindex.html");
				} else {
					echo '<div class="alert alert-danger mb-3">Invalid Username or Passowrd!</div>';
				}
			}
		}
	}

	function registration_form()
	{
		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$phone = $_POST['number'];
			$password = $_POST['password1'];
			$confirm_password = $_POST['password2'];

			if ($password != $confirm_password) {
				echo '<div class="alert alert-danger mb-3">Password is Not Match!</div>';
			}
			else
			{
				$sql = "INSERT INTO tbl_user(username, gender, email, phone, password) VALUES ('$username', '$gender','$email', '$phone', '$password')";
				$result = Query($sql);

				if($result == true)
				{
					header("Location: login.html");
				}
				else {
					echo '<div class="alert alert-danger mb-3">Please Fill Up Your Information!</div>';
				}
			}
		}
	}

?>