<?php include("../includes/head.php") ?>
    <div class="bg">
    <?php session_start() ;
        include("../includes/navbar.php") ?>
    </div>
    <div class="d-flex  flex-column justify-content-center align-items-centergap-4">
      <h3 class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h3>
        <div class="d-flex p-4 justify-content-center gap-3 flex-wrap">
        <?php
  include_once('../db.php');
  $db = new dbConnect();
  $result = $db->selectWithPagination('emprunt JOIN ouvrages on emprunt.ouvrages_Code=ouvrages.ouvrages_Code', '*', 'emprunt.emprunt_confirm=0', 2);
  // Loop through the result and display the records
  foreach ($result['result'] as $row) :
  ?>
          <div class="card" style="width: 18rem;">
            <img src="../images/<?= $row['Cover_Image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h4 class="card-title"><?= $row['Title'] ?></h4>
              <p class="card-text"><?= $row['Author_Name'] ?></p>
              <p class="card-text">Date edition :<?= $row['Edition_Date'] ?></p>
              <p class="card-text"><?= $row['Type_Name'] ?></p>
              <p class="card-text"><small class="text-muted"><?= $row['State'] . " " . $row['Status'] ?></small></p>
              <p class="card-text fw-bold">Return date: <?= date('Y-m-d', strtotime($row['emprunt_Date'].' +15 days'))  ?></p>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
    </div>
    <!-- PAGINATION -->
<div>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <?php
      if ($result['currentpage'] > 1) {
        echo '<li class="page-item"> <a  class="page-link text-black " href="?page=' . ($result['currentpage'] - 1) . '"><i class="fa-solid fa-chevron-left"></i></a> </li>';
      }
      for ($i = 1; $i <= $result['totalPages']; $i++) :
        if ($i == $result['currentpage']) {
          echo '<li class="page-item active"> <a  class="page-link  bg-black" href="#">' . $i . '</a> </li>';
        } else {
          echo '<li class="page-item"> <a  class="page-link text-black " href="?page=' . $i . '">' . $i . '</a> </li>';
        }
      endfor;
      if ($result['currentpage'] < $result['totalPages']) {
        echo '<li class="page-item"> <a class="page-link text-black " href="?page=' . ($result['currentpage'] + 1) . '"><i class="fa-solid fa-chevron-right"></i></a> </li>';
      }
      ?>
    </ul>
  </nav>
</div>
      <footer class="d-flex  flex-column align-items-center bg">
         <div class="d-flex  gap-3  p-3">
            <a href="http://" class="btn text-light"><i class="fa-brands fa-facebook"></i></a>
            <a href="http://" class="btn text-light"><i class="fa-brands fa-google"></i></a>
            <a href="http://" class="btn text-light"><i class="fa-brands fa-twitter"></i></a>
         </div>
         <div class="">
            <p class="bg_p">© Copyright  2023 | Privacy Policy</p>
         </div>
      </footer>
      <?php include("../includes/footer.php") ?>
