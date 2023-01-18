
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
	
<div class="panel">
		<div class="state"><br><i class="fa fa-unlock-alt"></i><br><h1>Log in</h1></div>
		<form action="./database/login.php" method="post">
		<div class="form">
			<input placeholder='Email' name="email"type="text">
			<input placeholder='Password' name="password"type="text">
			<input class="login" type="submit" name="submit">

		</div>
		</form>
		<a href="signup.php">Create new account? Click here</a>
	</div>
    
</body>
</html>