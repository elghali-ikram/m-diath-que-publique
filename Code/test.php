<?php 
            $DB_HOST='localhost';  
            $DB_USER='root';  
            $DB_PASSWORD='';  
            $DB_DATABSE='library';   
                $db=new PDO("mysql:host={$DB_HOST};dbname={$DB_DATABSE}",$DB_USER,$DB_PASSWORD); 
                if(!$db)// testing the connection  
                {  
                    echo "Cannot connect to the database";  
                } 
                $nickname=$_POST['nickname'];
                $password=$_POST['password'];
                echo $_POST['password'];

                $sql = "SELECT * FROM `adherent` WHERE `Nickname`= ?";
                $query = $db->prepare( $sql );
                $query->execute( array($nickname));
                $result=$query->fetchAll(PDO::FETCH_ASSOC);
                // print_r($result);
                if($result)
                {
                    echo "kayn";
                    echo $result[0]["Password"];
                    if(password_verify($password,$result[0]["Password"]))
                    {
                        echo "dkhel";
                    }
                    else
                    {
                        echo "walo";
                    }
                }
                else
                {
                    echo "makaynch";
                }
?>