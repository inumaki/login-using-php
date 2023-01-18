
<?php
 
 class DataBaseConnector {
                  
    private static $obj;
    private static $pdo;
                  
     private final function __construct($servername,$dbname,$dbusername,$dbpassword) 
     {


        self::$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection established";


     }
      
     public static function getConnect($servername,$dbname,$dbusername,$dbpassword) {

         if (!isset(self::$obj)) 
         {

            self::$obj = new DataBaseConnector($servername,$dbname,$dbusername,$dbpassword);
         
        }
          
         return self::$obj;
     }



        public static function destroy_connection()
            {
                self::$pdo=null;
            }
        



 }
  


  

 ?>