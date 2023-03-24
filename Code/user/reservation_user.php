
<?php include("../includes/head.php") ?>
<div class="bg">
  <?php session_start();
  include("../includes/navbar.php") ?>
</div>
<!-- CARDS OF RESEREVATIONS -->
<div class="d-flex  flex-column justify-content-center align-items-centergap-4">
  <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
  <div class="d-flex p-4 justify-content-center gap-3 flex-wrap">
    <?php
    include_once('../db.php');
    $db = new dbConnect();
    $result = $db->selectWithPagination('reservation JOIN ouvrages ON reservation.ouvrages_Code=ouvrages.ouvrages_Code JOIN types ON ouvrages.Type_Code=types.Type_Code', '*', 'reservation.Reservation_confirm=0', 2);
    // Loop through the result and display the records
    foreach ($result['result'] as $row) :
    ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/<?= $row['Cover_Image'] ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><?= $row['Title'] ?></h4>
              <p class="card-text"><?= $row['Author_Name'] ?></p>
              <p class="card-text">Date edition :<?= $row['Edition_Date'] ?></p>
              <p class="card-text"><?= $row['Type_Name'] ?></p>
              <p class="card-text"><small class="text-muted"><?= $row['State'] . " " . $row['Status'] ?></small></p>
              <form action="./reservation_user.php" method="post">
              <input type="hidden" name="codereserve" value="<?= $row['Reservation_Code'] ?>">
              <input type="hidden" name="ouvragecode" value="<?= $row['ouvrages_Code'] ?>">
                <button type="submit" class="btn bgbtn" name="cancel" value="cancel">Cancel Reservation</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>
<footer class="d-flex   flex-column align-items-center bg bottom-0">
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
$dataupdat= array(
  'State' => 'available'
);
if (isset($_POST['cancel'])) {
  $delet = $funObj->Delete('reservation','Reservation_Code', $_POST['codereserve']);
  $updat = $funObj->Updat('ouvrages', $dataupdat, $_POST['ouvragecode'], 'ouvrages_Code');
}
?>