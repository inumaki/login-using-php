
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>

<div class="panel">
<?php
session_start();


if ( !isset($_SESSION) || empty($_SESSION['username']))
{
    header("Location: ./login.php");
} 

echo '<p>Welcome  '.$_SESSION["username"].'</p>';

?>
        <form action="">
		<button class="login" name="submit"  >Logout</button>
        </form>
    <?php        
    if(isset($_REQUEST['submit']))
    {
    unset($_SESSION["username"]);
session_destroy();
header("Location: /login.php");
    }

 
    ?>

    </div>
</body>
</html>