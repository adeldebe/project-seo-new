<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style>
			body{
				background: #d5f0f3;
				font-family: Arial;
				background-color: #E6E6FA;
				padding: 50px;
			}
			 
			h1{
				text-align: center;
				/*ketebalan font*/
				font-weight: 300;
			}
			* {
				box-sizing: border-box;
			}

			*:focus {
				outline: none;
			}
	
			.login {
				margin: 20px auto;
				width: 340px;
			}
			.login-screen {
				background-color: #F8F8FF;
				padding: 20px;
				border-radius: 5px
				width: 350px;
			}

			.form_login{
			/*membuat lebar form penuh*/
				box-sizing : border-box;
				width: 100%;
				padding: 10px;
				font-size: 11pt;
				margin-bottom: 5px;
			}
			 

			.app-title {
				color: #777;
			}

			.login-form {
				text-align: left;
				margin-bottom: 8px;
			}
			.control-group {
				margin-bottom: 15px;
			}

			.label {
				color: #777;  
				font-family: sans-serif;
			}

			input {
				background-color: #ECF0F1;
				border: 2px solid transparent;
				border-radius: 3px;
				font-size: 16px;
				font-weight: 200;
				padding: 10px 0;
				width: 250px;
				transition: border .5s;
			}

			input:focus {
				border: 2px solid #3498DB;
				box-shadow: none;
			}

			.btn {
				border: 2px solid transparent;
				text-align: center;
				background: blue;
				color: #ffffff;
				font-size: 14px;
				font-weight: bold;
				line-height: 25px;
				padding: 5px;
				text-decoration: none;
				text-shadow: none;
				border-radius: 3px;
				box-shadow: none;
				transition: 0.25s;
				display: block;
				width: 300px;
				margin: 0 auto;
			}

			.btn:hover {
			  	background-color: #2980B9;
			}

			.login-link {
			   font-size: 12px;
			   color: #444;
			   display: block;
			   margin-top: 12px;
			}
	</style>
</head>
<body>
	<body>
	<h1><img align="center" src="{{ asset('style/images/LogoNusa1.png') }}"></h1>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h2>Sign in</h2>
				<hr color="#D3D3D3" />
			</div>
			<br>
			<div class="login-form">
				<div class="control-group">
				<form action="{{ url("/postlogin") }}" method="POST" class="">
				@csrf

				<div class="control-group">
				<label class="label" for="email">email address</label>
				<input type="text" name="email" class="form_login" id="email" required>
				</div>

				<div class="control-group">
				<label class="label" for="password">Password</label>
				<input type="password" name="password" class="form_login" id="password" required>
				</div>

				<input type="submit" class="btn btn-primary btn-large btn-block" value="LOGIN">
				<p class="label">Don't have an account? <a href="{{ url("/register") }}">Sign up</a></p>
			</div>
		</div>
	</div>
</body>