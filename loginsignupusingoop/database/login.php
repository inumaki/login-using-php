<?php

include 'connection.php';

include 'user.php';

$servername = "localhost";
$dbusername = "aryan";
$dbpassword = "aryan";
$dbname = "mysql";


if (isset($_POST['submit'])) {
    try {


    $obj1 = DataBaseConnector::getConnect($servername,$dbname,$dbusername,$dbusername);

        $email = $_POST['email'];
        $password =$_POST['password'];
        $sql = "SELECT  customer_name,email, password from customer_info where '$email'=email ";

        $q = UserQueries::fetch($sql);

      
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


    DataBaseConnector::destroy_connection();
}
    
?>