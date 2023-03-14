<?php 

        // public function paginate($table, $page, $limit, $order, $where = null) {
        //     // Calculate the offset
        //     $offset = ($page - 1) * $limit;
            
        //     // Build the query
        //     $query = "SELECT * FROM $table";
        //     if ($where) {
        //         $query .= " WHERE $where";
        //     }
        //     $query .= " ORDER BY $order LIMIT $limit OFFSET $offset";
            
        //     // Execute the query and return the results
        //     $stmt = $this->db->prepare($query);
        //     $stmt->execute();
        //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
//         // }
// $db = new dbConnect();

// // Get the current page number from the URL parameter
// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// // Set the number of records to display per page
// $limit = 10;

// // Get the total number of records
// $total = $db->select('my_table', 'COUNT(*)')->fetchColumn();

// // Calculate the total number of pages
// $pages = ceil($total / $limit);

// // Retrieve the data for the current page
// $data = $db->paginate('my_table', $page, $limit, 'id ASC');

// // Output the data and pagination links
// foreach ($data as $row) {
//     // Output the data row
// }
// // Output the pagination links
// for ($i = 1; $i <= $pages; $i++) {
//     echo "<a href='?page=$i'>$i</a> ";
// }




// $params = array();        
// // Get the total number of records
// $countQuery = "SELECT COUNT(*) as count FROM $table";
// if ($where != null) {
//     $countQuery .= " WHERE $where";
// }
// $countStmt = $this->db->prepare($countQuery);
// $countStmt->execute($params);
// $countResult = $countStmt->fetch(PDO::FETCH_ASSOC);
// $totalCount = $countResult['count'];
// $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
// // Calculate the offset and limit for the current page
// $offset = ($currentPage - 1) * $perPage;
// $limit = $perPage;
// $query = "SELECT $rows FROM $table LIMIT $limit OFFSET $offset";

// $stmt = $this->db->prepare($query);
// $stmt->execute($params);
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// // Calculate the total number of pages
// $totalPages = ceil($totalCount / $perPage);

// // Return an array containing the result, the total number of records,the current page, and the total number of pages
// return array(
//     'ofsset'=>$offset,
//     'query'=>$query,
//     'result' => $result,
//     'totalCount' => $totalCount,
//     'currentPage' => $page,
//     'totalPages' => $totalPages
// );
?>