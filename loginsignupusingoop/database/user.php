<?php


 class UserQueries
  {
                  
    
    private static $pdo;
    private static $obj;              
     private final function __construct($conn) 
     {
        self::$pdo = $conn;

     }
      
     public static function getConnect($conn) {

         if (!isset(self::$obj)) 
         {

            self::$obj = new UserQueries($conn);
         
        }
          
         return self::$obj;
     }

        public static function insertData($email,$name,$address,$contact,$password)
        {

            $sql = "INSERT INTO customer_info (customer_name, email,contact,address,password)
            VALUES ('$name', '$email', '$contact','$address', '$password')";
            self::$pdo->exec($sql);

        }

        public static function fetch($sql)
        {
            $q = self::$pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
        return $q;
       
    }


      
        



 }
  

?>