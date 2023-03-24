<?php include("../includes/head.php") ?>
  <div class="bg">
    <?php session_start();
    include("../includes/navbar.php") ?>
  </div>
  <div class="d-flex p-4 justify-content-center">
    <!-- FORM SEARCH -->
    <form action="./user.php" method="POST" class="p-3  d-flex  justify-content-center gap-2" id="signupform">
      <div class="formvalid ">
        <input type="text"  name="search" class="form-control " id="search" placeholder="Search by Title or author" />
        <small></small>
      </div>
      <button type="submit" class="btn bgbtn" name="search_btn" value="search_btn" id="search_btn">Search</button>
    </form>
  </div>
  <div class="d-flex p-4 justify-content-center gap-3 flex-wrap">
  <?php
    include_once('../db.php');
    $db = new dbConnect();
    if(isset($_POST["search_btn"])){
      $search = $_POST["search"];
      $where="Title LIKE '$search%' OR Author_Name LIKE '$search%'";
      $result = $db->selectWithPagination('ouvrages', '*', $where, 2);
      foreach ($result['result'] as $row) :
    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/<?= $row['Cover_Image'] ?>" class="img-fluid rounded-start" alt="..." width="310px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><?= $row['Title'] ?></h4>
              <p class="card-text"><?= $row['Author_Name'] ?></p>
              <p class="card-text">Date edition :<?= $row['Edition_Date'] ?></p>
              <p class="card-text"><?= $row['Type_Name'] ?></p>
              <p class="card-text"><small class="text-muted"><?= $row['State'] . " " . $row['Status'] ?></small></p>
              <form action="./user.php" method="post">
                <input type="hidden" name="ouvragecode" value="<?= $row['ouvrages_Code'] ?>">
                <button type="submit" class="btn bgbtn" name="reserve" value="reserve" <?= $row['State'] == 'available' ? '' : 'disabled'; ?>>Reserve</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
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
    <?php }else{ ?>
    <?php
    include_once('../db.php');
    $db = new dbConnect();
    $result = $db->selectWithPagination('ouvrages JOIN types ON ouvrages.Type_Code=types.Type_Code ', '*', null, 2);
    // Loop through the result and display the records
    foreach ($result['result'] as $row) :
    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/<?= $row['Cover_Image'] ?>" class="img-fluid rounded-start" alt="..." width="310px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><?= $row['Title'] ?></h4>
              <p class="card-text"><?= $row['Author_Name'] ?></p>
              <p class="card-text">Date edition :<?= $row['Edition_Date'] ?></p>
              <p class="card-text"><?= $row['Type_Name'] ?></p>
              <p class="card-text"><small class="text-muted"><?= $row['State'] . " " . $row['Status'] ?></small></p>
              <form action="./user.php" method="post">
                <input type="hidden" name="ouvragecode" value="<?= $row['ouvrages_Code'] ?>">
                <button type="submit" class="btn bgbtn" name="reserve" value="reserve" <?= $row['State'] == 'available' ? '' : 'disabled'; ?>>Reserve</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
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
  <?php }?>
  <footer class="d-flex  flex-column align-items-center bg mb-0">
    <div class="d-flex  gap-3  p-3">
      <a href="http://" class="btn text-light"><i class="fa-brands fa-facebook"></i></a>
      <a href="http://" class="btn text-light"><i class="fa-brands fa-google"></i></a>
      <a href="http://" class="btn text-light"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <div class="">
      <p class="bg_p">© Copyright 2023 | Privacy Policy</p>
    </div>
  </footer>
  <?php include("../includes/footer.php") ?>
  <!-- CODE PHP FOR RESERVATION -->
<?php
include_once('../db.php');
$funObj = new dbConnect();
if (isset($_POST['reserve'])) {
  $datareservation = array(
    'Reservation_Code' => NULL,
    'Reservation_Date' => date("Y-m-d"),
    'Reservation_Expiration_Date' => date('Y-m-d', strtotime('+24 hours')),
    'ouvrages_Code' => $_POST['ouvragecode'],
    'Nickname' => $_SESSION["nickname"],
    'Reservation_confirm' => 0
  );
  $dataupdat= array(
    'State' => 'reserved'
  );
  $insertreservation = $funObj->Insert('reservation', $datareservation);
  $updat = $funObj->Updat('ouvrages', $dataupdat, $_POST['ouvragecode'], 'ouvrages_Code');
}
?>
