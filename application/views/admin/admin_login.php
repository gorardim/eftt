<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Login</title>
		<style>
			*{
				box-sizing: border-box;
			}
			.logo img{
				width: 100%;
			}
			.login-pannel{
				width: 100%;
				margin: 50px auto;
				padding: 25px;
				background: #ccc;
				max-width: 500px;
			}
			.login-form>form>input{
				width: 100%;
				padding: 10px;
				color: #000;
				margin: 20px 0;
				text-align: center;
			}
			.login-form>form>button{
				width: 50%;
				padding: 10px;
				color: #000;
				margin: 20px auto;
				cursor: pointer;
				display: block;
				text-align: center;
			}
		</style>

	</head>
	<body>
		
		<div class="login-pannel">
			<div class="logo">
                            <img src="<?php echo base_url(); ?>logo.png" alt="easy fly tours and travels">
			</div>
			<div class="login-form">
				<form action="">
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="password" placeholder="Password" required>
					<button type="submit" >Log In</button>
				</form>
			</div>
		</div>

	</body>
</html>