
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
	<title>Sing in</title>
</head>
<body>
	
	<div class ="row">
		<div class="col-md-6 mx-auto p-0">
			<div class="card">
	<div class="login-box">
	<form method="post" action="./controllers/Users.php">
		<div class="login-snip">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-space">
				<div class="login">
				<input type="hidden" name="type" value="login">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input"  placeholder="Username/Email..." name="name/email">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password" name="usersPwd">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
						<input type="submit" name="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
					<div class="foot">
						<a href="#">Forgot Password?</a>
					</div>
				</div>
				<form method="post" action="./controllers/Users.php">
				<div class="sign-up-form">
				<input type="hidden" name="type" value="register">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" placeholder="Create your Username" name="usersName">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" placeholder="Create your password" name="usersPwd" >
					</div>
					<div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password" name="pwdRepeat"  >
					</div>
					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input id="pass" type="text" class="input" placeholder="Enter your email address" name="usersEmail">
					</div>
					<div class="group">
						<input type="submit" name="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
					<div class="foot">
						<label for="tab-1">Already Member?</label>
					</div>
				</div>
			</div>
		</div>
	</div>   
	</div>
	</div>
	</div>
	
</body>
</html>