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
        public function isUserExist($nickname, $email,$cin,)
        {
            try {
                $sql = "SELECT * FROM `adherent` WHERE `Nickname`=? OR `Email`=? OR `CIN`=?";
                $query = $this->db->prepare( $sql );
                $query->execute( array($nickname,$email,$cin));
                $results = $query->fetchAll();
                if(count($results) > 0)
                {
                    return true;
                }
                else{
                    return false;
                }
            } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
        } 
        public function admin($nickname, $password)
        {
            try {
                $pass=password_hash($password, PASSWORD_DEFAULT);
                $sql = "SELECT * FROM `adherent` WHERE `Nickname`= ? AND `Admin`=1";
                $query = $this->db->prepare( $sql );
                $query->execute( array($nickname));
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                if($results)
                {
                    if(password_verify($password,$results[0]["Password"]))
                    {
                        return true;
                    }
                }
                else{
                    return false;
                }
            } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
        } 
        public function signin($nickname, $password)
        {
            try {
                $sql = "SELECT * FROM `adherent` WHERE `Nickname`= ?";
                $query = $this->db->prepare( $sql );
                $query->execute( array($nickname));
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                if($results)
                {
                    if(password_verify($password,$results[0]["Password"]))
                    {
                        return true;
                    }
                }
                else{
                    return false;
                }
            } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
        } 
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