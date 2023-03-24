<?php include("../includes/head.php") ?>
  <div class="bg">
    <?php session_start();
    include("../includes/navbar.php") ?>
  </div>
  <!-- CARDS OF RESEREVATIONS -->
  <div class="d-flex  flex-column justify-content-center align-items-centergap-4">
  <div class="d-flex justify-content-center">
<!-- FORM SEARCH -->
<form action="./book_office.php" method="POST" class="p-5 w-75 d-flex  justify-content-center gap-4" id="signupform">
      <div class="formvalid ">
        <input type="text" name="search" class="form-control" id="search" placeholder="Search" />
        <small></small>
      </div>
      <button type="submit" class="btn bgbtn" name="search_btn" id="search_btn">Search</button>
    </form>
</div>
    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    <div class="d-flex justify-content-center gap-2 flex-column w-100 p-5">
      <?php
      include_once('../db.php');
      $db = new dbConnect();
      $result = $db->selectWithPagination('reservation JOIN ouvrages ON reservation.ouvrages_Code=ouvrages.ouvrages_Code JOIN adherent ON reservation.Nickname=adherent.Nickname LEFT JOIN emprunt ON  emprunt.ouvrages_Code=ouvrages.ouvrages_Code','ouvrages.ouvrages_Code,ouvrages.Title,adherent.Nickname,adherent.Name,ouvrages.Cover_Image,ouvrages.ouvrages_Code,reservation.Reservation_Code,reservation.Reservation_Date,reservation.Reservation_confirm', 'emprunt.emprunt_confirm =0 OR reservation.Reservation_Code NOT IN (SELECT Reservation_Code FROM emprunt )', 2);
      // Loop through the result and display the records
      foreach ($result['result'] as $row) :
      ?>
        <div class="d-flex justify-content-between bg_res h-50 rounded p-3 ">
          <div class="d-flex gap-5 ">
            <img src="../images/<?= $row['Cover_Image'] ?>" class="img-fluid rounded" alt="..." width="100px">
            <div class="d-flex flex-column bg_p">
              <h4><?= $row['Title'] ?></h4>
              <p><i class="fa-regular fa-calendar"></i> Date reservation : <?= $row['Reservation_Date'] ?></p>
              <p><i class="fa-solid fa-user"></i> <?= $row['Name'] ?></p>
            </div>
          </div>
          <form action="./reservation_office.php" method="post" class="d-flex gap-3 p-4">
            <input type="hidden" name="ouvrages_Code" value="<?= $row['ouvrages_Code'] ?>">
            <input type="hidden" name="Nickname" value="<?= $row['Nickname'] ?>">
            <input type="hidden" name="Reservation_Code" value="<?= $row['Reservation_Code'] ?>">
            <button type="submit" class="btn bgbtn shadow p-3 mb-5  rounded" name="emprunt" value="emprunt" <?= $row['Reservation_confirm'] == '1' ? 'disabled' : ''; ?>>Emprunt</button>
            <button type="submit" class="btn bgbtn shadow p-3 mb-5  rounded" name="return" value="return" <?= $row['Reservation_confirm'] == '0' ? 'disabled' : ''; ?>>Return</button>
          </form>
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


  <footer class="d-flex  flex-column align-items-center bg bottom-0">
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
<?php 
include_once('../db.php');
$funObj = new dbConnect();
if(isset($_POST['emprunt'])) 
{
  $data = array(
    'emprunt_Code' => NULL,
    'emprunt_Date' => date("Y-m-d"),
    'emprunt_Return_Date' => NULL,
    'ouvrages_Code' => $_POST['ouvrages_Code'],
    'Nickname' => $_POST['Nickname'],
    'Reservation_Code' => $_POST['Reservation_Code'],
    'emprunt_confirm' => 0
  );
  $dataupdat = array(
    'Reservation_confirm' => 1
  );
  $updat_ouvrages = array(
    'state' => "Browed"
  );
  $insert = $funObj->Insert('emprunt', $data);
  $updat = $funObj->Updat('reservation', $dataupdat, $_POST['Reservation_Code'], 'Reservation_Code');
  $updat = $funObj->Updat('ouvrages', $updat_ouvrages, $_POST['ouvrages_Code'], 'ouvrages_Code');
}
if(isset($_POST['return'])) 
{
  $data_updat = array(
    'emprunt_Return_Date' => date("Y-m-d"),
    'emprunt_confirm' => 1,
  );
  $data_ouvrages = array(
    'state' => "available"
  );
  $data_adherent = array(
    'Penalty_Count' => 'Penalty_Count'+1,
  );
  print_r($data_adherent);
  // $reservation=$_POST['Reservation_Code'];
  // $where="Reservation_Code='$reservation'";
  // echo $reservation;
  $select=$funObj->Select("emprunt",$rows="*", $where);
  // if (date("Y-m-d")>date('Y-m-d', strtotime($select["result"][0]["emprunt_Date"].' +15 days'))) {
  //   // $updat = $funObj->Updat('adherent', $$data_adherent, $_POST['Nickname'], 'Nickname');
  // }
  // $updat = $funObj->Updat('emprunt', $data_updat, $_POST['Reservation_Code'], 'Reservation_Code');
  // $updat = $funObj->Updat('ouvrages', $data_ouvrages, $_POST['ouvrages_Code'], 'ouvrages_Code');
} 

?>