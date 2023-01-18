<?php

$servername = "localhost";
$dbusername = "aryan";
$dbpassword = "aryan";
$dbname = "mysql";
if (isset($_POST['submit'])) {
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $email = $_POST['email'];
        $password =$_POST['password'];
        $sql = "SELECT  customer_name,email, password from customer_info where '$email'=email ";
        
$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
while ($row = $q->fetch())
{
        $res=  password_verify($password, $row['password']);
            echo $res;
    if(password_verify($password,$row['password'])==true)
           {
              
            session_start();
            $_SESSION["username"] = $row['customer_name'];
                header("Location: ../home.php");

           }
           else
           {

                echo "wrong password";
           }

}
     

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


    $conn = null;
}
    
?>