<?php

$servername = "localhost";
$dbusername = "aryan";
$dbpassword = "aryan";
$dbname = "mysql";
if (isset($_POST['submit'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $email = $_POST['email'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['phonenumber'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $sql = "INSERT INTO customer_info (customer_name, email,contact,address,password)
  VALUES ('$name', '$email', '$contact','$address', '$password')";

        $conn->exec($sql);
        
        echo "Successfully Signedup";
        echo "<br>";
        echo '<a href="../login.php">' . "login now" . '</a>';

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


    $conn = null;
}
    
?>