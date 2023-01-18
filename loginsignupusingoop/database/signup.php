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
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['phonenumber'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

         UserQueries::insertData($email, $name, $address, $contact, $password);
    
        
        echo "Successfully Signedup";
        echo "<br>";
        echo '<a href="../login.php">' . "login now" . '</a>';

    } 
    catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


    DataBaseConnector::destroy_connection();
}
    
?>