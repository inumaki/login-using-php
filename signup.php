
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
<div class="panel">
		<div class="state"><br><i class="fa fa-unlock-alt"></i><br><h1>Signup</h1></div>
        <form  method="post"  action="./database/signup.php">
		<div class="form" >

			<input placeholder='Email' name="email"type="text" required>
            <input placeholder='Name' name="name" type="text" required>
            <input placeholder='Address' name="address"type="text" required>
            <input type="tel" id="phone" name="phonenumber" placeholder="Contact Number" pattern="[0-9]{10}" required>
			<input placeholder='Password' name="password" type="text" required  >
           
			<input class="login" name="submit" type="submit" value="Signup"/>
            <a href="login.php">Already created account? Click here</a>

		</div>
        </form>

	</div>

 

</body>
</html>