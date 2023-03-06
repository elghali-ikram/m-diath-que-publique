<?php 

    class dbConnect {  
        private $db;
        function __construct() { 
            $DB_HOST='localhost';  
            $DB_USER='root';  
            $DB_PASSWORD='';  
            $DB_DATABSE='library';   
                $this->db=new PDO("mysql:host={$DB_HOST};dbname={$DB_DATABSE}",$DB_USER,$DB_PASSWORD); 
                if(!$this->db)// testing the connection  
                {  
                    echo "Cannot connect to the database";  
                }      
        }  
        //      ,?
        // 
        public function signup($nickname, $name,$password,$adresse,$email,$phone,$cin,$ocupation,$birthdate)
        {
            try {
                $pass=password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `adherent`(`Nickname`, `Name`, `Password`, `Admin` , `Address`, `Email`, `Phone`,`CIN`, `Occupation` ,  `Birth_Date`, `Creation_Date`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->db->prepare( $sql );
                $query->execute( array($nickname,$name,$pass,0,$adresse,$email,$phone,$cin,$ocupation,$birthdate,date('Y-m-d') ));
                return $query;
            } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
        } 
    }      


?>