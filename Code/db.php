<?php 
    class dbConnect {  
        function __construct() { 
            $DB_HOST='localhost';  
            $DB_USER='root';  
            $DB_PASSWORD='';  
            $DB_DATABSE='library';   
                $conn=new PDO("mysql:host={$DB_HOST};dbname={$DB_DATABSE}",$DB_USER,$DB_PASSWORD); 
                if(!$conn)// testing the connection  
                {  
                    echo "Cannot connect to the database";  
                } 
               return $conn;
     
        }  
        // public function Close(){  
        //     $con=null;  
        // }  
    }      


?>