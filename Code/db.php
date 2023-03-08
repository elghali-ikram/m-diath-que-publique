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
            session_start();
            try {
                $sql = "SELECT * FROM `adherent` WHERE `Nickname`= ?";
                $query = $this->db->prepare( $sql );
                $query->execute( array($nickname));
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                if($results)
                {
                    if(password_verify($password,$results[0]["Password"]))
                    {
                        $_SESSION["nickname"]=$results[0]["Nickname"];
                        $_SESSION["admin"]=$results[0]["Admin"];
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
        public function logout() {
            session_start();
            session_destroy();
            header("Location: ./landing.php");
            exit();
        }
        public function Insert($table, $data) {
            $columns = implode(', ', array_keys($data));
            $placeholders = implode(', ', array_fill(0, count($data), '?'));
            $stmt = $this->db->prepare("INSERT INTO $table ($columns) VALUES ($placeholders)");
            $stmt->execute(array_values($data));
            $lastInsertId = $this->db->lastInsertId();
            return $lastInsertId;
        }
        public function Updat($table, $data,$id, $idname) {
            $columns = array();
            $values = array();
            foreach ($data as $key => $value) {
                $columns[] = $key . ' = ?';
                $values[] = $value;
            }
            $values[] = $id;
        
            $sql = 'UPDATE ' . $table . ' SET ' . implode(', ', $columns) . ' WHERE '.$idname .' = ?';
        
            $stmt = $this->db->prepare($sql);
        
            $stmt->execute($values);
            return $stmt;
        }
        public function Delete($table,$data, $id) {
            $columns = implode(', ', array_keys($data));
            $sql = "DELETE FROM $table WHERE  $columns = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
            return $stmt;
        }
        public function select($table, $rows="*", $where=null) {
            $query = "SELECT $rows FROM $table";
            $params = array();
            if ($where != null) {
                $query .= " WHERE $where";
            }
        
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
        
            $this->sql = $stmt;
            return $stmt;
        }
    }
?>