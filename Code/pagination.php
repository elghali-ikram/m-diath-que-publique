<?php
          include_once('./db.php'); 

     $db = new dbConnect();

     // Get the first page of records from the "adherent" table with 10 records per page
     $result = $db->selectWithPagination('adherent', '*', null,2);
     
     // Loop through the result and display the records
     foreach ($result['result'] as $row) {
         echo $row['Nickname'] . "<br>";
     }
     
     // Display the pagination links
     for ($i = 1; $i <= $result['totalPages']; $i++) {
         echo "<a href='?page=$i'>$i</a> ";
     } 
     echo $result["query"] ."</br>";
     echo $result["ofsset"];

  ?>