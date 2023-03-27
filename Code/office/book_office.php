<?php include("../includes/head.php") ?>
<div class="bg">
  <?php session_start();
  include("../includes/navbar.php") ?>
</div>
<div class="d-flex justify-content-center">
<!-- FORM SEARCH -->
<form action="./book_office.php" method="POST" class="p-5 w-75 d-flex  justify-content-center gap-4" id="signupform">
      <div class="formvalid ">
        <input type="text" name="search" class="form-control" id="search" placeholder="Search" />
        <small></small>
      </div>
      <button type="submit" class="btn bgbtn" name="search_btn" value="search_btn" id="search_btn">Search</button>
    </form>
</div>
<div class="d-flex p-4 justify-content-center">
  <!-- BUTTON ADD-->
  <a data-bs-target="#addcollection" data-bs-toggle="modal" class="btn bgbtn w-50"><i class="fa-solid fa-plus"></i> Add collection</a>
  <!-- MODAL ADD -->
  <div class="modal modal-lg fade" id="addcollection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content h-25">
        <div class="modal-body container p-5">
          <form action="./book_office.php" method="POST" class="myFormadd" enctype="multipart/form-data">
            <h2 class="text-center">Add a collection</h2>
            <input type="hidden" name="id">
            <div class=" d-flex flex-column gap-3">
              <div class="formvalid">
                <div class="file-input d-md-flex flex-column justify-content-center align-items-center mb-3">
                  <img id="icon" src="../images/upload.svg" alt="Upload Icon" />
                  <input type="file" name="fileInput" id="fileInput" />
                  <img id="previewImage" src="#" alt="Image Preview" />
                </div>
                <small></small>
              </div>
              <div class="d-flex gap-3">
                <div class="w-50 formvalid">
                  <label class="form-label">Title</label>
                  <input type="text" name="titleadd" class="form-control titleadd" placeholder="Title" />
                  <small></small>
                </div>
                <div class="w-50 formvalid">
                  <label class="form-label">Author</label>
                  <input type="text" min="0" name="authoradd" class="form-control authoradd" placeholder="Author" />
                  <small></small>
                </div>
              </div>
              <div class="d-flex gap-3">
                <div class="w-50 formvalid">
                  <label class="form-label">Date Edition</label>
                  <input type="date" name="editiondateadd" class="form-control editiondateadd" placeholder="Date Edition" />
                  <small></small>
                </div>
                <div class="w-50 formvalid">
                  <label class="form-label">Date of purchase</label>
                  <input type="date" name="datepurchaseadd" class="form-control datepurchaseadd" placeholder="date of purchase" />
                  <small></small>
                </div>
              </div>
              <div class="d-flex gap-3">
                <div class="w-50 formvalid">
                  <label class="form-label">Type</label>
                  <select class="form-select typeadd" name="typeadd">
                    <option selected disabled>Chose</option>
                    <option value="livre">livre</option>
                    <option value="revue">revue</option>
                    <option value="roman">roman</option>
                    <option value="DVD">DVD</option>
                  </select>
                  <small></small>
                </div>
                <div class="w-50 formvalid visi">
                  <label class="form-label">Type</label>
                  <input type="text" name="numberof" class="form-control numberof" placeholder="numberof" />
                  <small></small>
                </div>
              </div>
              <div class="w-50 formvalid">
                <label class="form-label">Status</label>
                <select class="form-select statusadd" name="statusadd">
                  <option selected disabled>Chose</option>
                  <option value="new">new</option>
                  <option value="Acceptable">Acceptable</option>
                  <option value="Quite worn">Quite worn</option>
                  <option value="Torn">Torn</option>
                </select>
                <small></small>
              </div>
              <div class="justify-content-end d-flex">
                <button name="addBtn" value="addBtn" type="submit" class="btn bgbtn text-white">Add collection</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CARDS OF COLLECTION  -->
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
          <img src="../images/<?= $row['Cover_Image'] ?> " class="img-fluid rounded-start" alt="..." width="310px" height="100%">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title"><?= $row['Title'] ?></h4>
            <p class="card-text"><?= $row['Author_Name'] ?></p>
            <p class="card-text">Date edition :<?= $row['Edition_Date'] ?></p>
            <p class="card-text"><?= $row['Type_Name'] ?></p>
            <p class="card-text"><small class="text-muted"><?= $row['State'] . " " . $row['Status'] ?></small></p>
            <form action="reserve.php" class="d-flex gap-3" method="post">
              <input type="hidden" name="id">
              <a data-bs-target="#editcollection<?= $row['ouvrages_Code'] ?>" data-bs-toggle="modal">UPDAT</a>
              <a data-bs-target="#deletecollection<?= $row['ouvrages_Code'] ?>" data-bs-toggle="modal">DELETE</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL UPDAT -->
    <div class="modal modal-lg fade" id="editcollection<?= $row['ouvrages_Code'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content h-25">
          <div class="modal-body container p-5">
            <form action="./book_office.php" method="POST" class="myFormupdat" enctype="multipart/form-data">
              <h2 class="text-center">Update a collection</h2>
              <input type="hidden" value="<?= $row['ouvrages_Code'] ?>" name="id">
              <div class=" d-flex flex-column gap-3">
                <div class="formvalid">
                  <div class="file-inputs d-md-flex flex-column justify-content-center align-items-center mb-3">
                    <img class="iconupdat" src="../images/upload.svg" alt="Upload Icon" />
                    <input type="file" name="fileInputupdat" class="fileInputupdat" />
                    <img class="previewImageupdat" src="../images/<?= $row['Cover_Image'] ?>" alt="Image Preview" />
                  </div>
                  <input type="hidden" value="<?= $row['Cover_Image'] ?>" name="imageupdat">
                  <small></small>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Title</label>
                    <input type="text" name="titleupdat" class="form-control titleupdat" value="<?= $row['Title'] ?>" placeholder="Title" />
                    <small></small>
                  </div>
                  <div class="w-50 formvalid">
                    <label class="form-label">Author</label>
                    <input type="text" name="authorupdat" class="form-control authorupdat" value="<?= $row['Author_Name'] ?>" placeholder="Author" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Date Edition</label>
                    <input type="date" value="<?= $row['Edition_Date'] ?>" name="editiondateupdat" class="form-control editiondateupdat" />
                    <small></small>
                  </div>
                  <div class="w-50 formvalid">
                    <label f class="form-label">Date of purchase</label>
                    <input type="date" name="datepurchaseupdat" class="form-control datepurchaseupdat" value="<?= $row['Buy_Date'] ?>" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Type</label>
                    <select class="form-select typeupdat" name="typeupdat">
                      <option selected disabled>Chose</option>
                      <option value="livre" <?= $row['Type_Name'] == 'livre' ? ' selected="selected"' : ''; ?>>livre</option>
                      <option value="revue" <?= $row['Type_Name'] == 'revue' ? ' selected="selected"' : ''; ?>>revue</option>
                      <option value="roman" <?= $row['Type_Name'] == 'roman' ? ' selected="selected"' : ''; ?>>roman</option>
                      <option value="DVD" <?= $row['Type_Name'] == 'DVD' ? ' selected="selected"' : ''; ?>>DVD</option>
                    </select>
                    <small></small>
                  </div>
                  <div class="w-50 formvalid visiupdat">
                    <input type="hidden" value="<?= $row['Type_Code'] ?>" name="idtype">
                    <label class="form-label"><?= $row['Type_Name'] == 'DVD' ? 'Duration' : 'Number of pages'; ?></label>
                    <input type="text" name="numberofupdat" class="form-control numberofupdat" placeholder="<?= $row['Type_Name'] == 'DVD' ? 'duration' : 'Number of pages'; ?>" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Status</label>
                    <select class="form-select statusupdat" name="statusupdat">
                      <option selected disabled>Chose</option>
                      <option value="New" <?= $row['Status'] == 'New' ? ' selected="selected"' : ''; ?>>New</option>
                      <option value="Acceptable" <?= $row['Status'] == 'Acceptable' ? ' selected="selected"' : ''; ?>>Acceptable</option>
                      <option value="Quite worn" <?= $row['Status'] == 'Quite worn' ? ' selected="selected"' : ''; ?>>Quite worn</option>
                      <option value="Torn" <?= $row['Status'] == 'Torn' ? ' selected="selected"' : ''; ?>>Torn</option>
                    </select>
                    <small></small>
                  </div>
                </div>
                <div class="justify-content-end d-flex">
                  <button name="updatBtn" value="updatBtn" type="submit" class="btn bgbtn text-white">Modifier</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DELETE -->
    <div class="modal" id="deletecollection<?= $row['ouvrages_Code'] ?>" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content h-25">
          <div class="modal-body texte-white bgmodal">
            <h3>étes vous sure de vouloir supprimer</h3>
            <form method="post" action="./book_office.php">
              <input type="hidden" name="delete_id" value="<?= $row['ouvrages_Code'] ?>">
              <input type="hidden" name="delete_idtype" value="<?= $row['Type_Code'] ?>">
              <button type="submit" name="delet" value="delete" class="btn bgbtn">
                Delete
              </button>
              <button type="button" class="btn btn-secondary buttons" data-bs-dismiss="modal">
                Cancel
              </button>
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
          <img src="../images/<?= $row['Cover_Image'] ?> " class="img-fluid rounded-start" alt="..." width="310px" height="100%">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title"><?= $row['Title'] ?></h4>
            <p class="card-text"><?= $row['Author_Name'] ?></p>
            <p class="card-text">Date edition :<?= $row['Edition_Date'] ?></p>
            <p class="card-text"><?= $row['Type_Name'] ?></p>
            <p class="card-text"><small class="text-muted"><?= $row['State'] . " " . $row['Status'] ?></small></p>
            <form action="reserve.php" class="d-flex gap-3" method="post">
              <input type="hidden" name="id">
              <a data-bs-target="#editcollection<?= $row['ouvrages_Code'] ?>" data-bs-toggle="modal">UPDAT</a>
              <a data-bs-target="#deletecollection<?= $row['ouvrages_Code'] ?>" data-bs-toggle="modal">DELETE</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL UPDAT -->
    <div class="modal modal-lg fade" id="editcollection<?= $row['ouvrages_Code'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content h-25">
          <div class="modal-body container p-5">
            <form action="./book_office.php" method="POST" class="myFormupdat" enctype="multipart/form-data">
              <h2 class="text-center">Update a collection</h2>
              <input type="hidden" value="<?= $row['ouvrages_Code'] ?>" name="id">
              <div class=" d-flex flex-column gap-3">
                <div class="formvalid">
                  <div class="file-inputs d-md-flex flex-column justify-content-center align-items-center mb-3">
                    <img class="iconupdat" src="../images/upload.svg" alt="Upload Icon" />
                    <input type="file" name="fileInputupdat" class="fileInputupdat" />
                    <img class="previewImageupdat" src="../images/<?= $row['Cover_Image'] ?>" alt="Image Preview" />
                  </div>
                  <input type="hidden" value="<?= $row['Cover_Image'] ?>" name="imageupdat">
                  <small></small>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Title</label>
                    <input type="text" name="titleupdat" class="form-control titleupdat" value="<?= $row['Title'] ?>" placeholder="Title" />
                    <small></small>
                  </div>
                  <div class="w-50 formvalid">
                    <label class="form-label">Author</label>
                    <input type="text" name="authorupdat" class="form-control authorupdat" value="<?= $row['Author_Name'] ?>" placeholder="Author" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Date Edition</label>
                    <input type="date" value="<?= $row['Edition_Date'] ?>" name="editiondateupdat" class="form-control editiondateupdat" />
                    <small></small>
                  </div>
                  <div class="w-50 formvalid">
                    <label f class="form-label">Date of purchase</label>
                    <input type="date" name="datepurchaseupdat" class="form-control datepurchaseupdat" value="<?= $row['Buy_Date'] ?>" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Type</label>
                    <select class="form-select typeupdat" name="typeupdat">
                      <option selected disabled>Chose</option>
                      <option value="livre" <?= $row['Type_Name'] == 'livre' ? ' selected="selected"' : ''; ?>>livre</option>
                      <option value="revue" <?= $row['Type_Name'] == 'revue' ? ' selected="selected"' : ''; ?>>revue</option>
                      <option value="roman" <?= $row['Type_Name'] == 'roman' ? ' selected="selected"' : ''; ?>>roman</option>
                      <option value="DVD" <?= $row['Type_Name'] == 'DVD' ? ' selected="selected"' : ''; ?>>DVD</option>
                    </select>
                    <small></small>
                  </div>
                  <div class="w-50 formvalid visiupdat">
                    <input type="hidden" value="<?= $row['Type_Code'] ?>" name="idtype">
                    <label class="form-label"><?= $row['Type_Name'] == 'DVD' ? 'Duration' : 'Number of pages'; ?></label>
                    <input type="text" name="numberofupdat" class="form-control numberofupdat" placeholder="<?= $row['Type_Name'] == 'DVD' ? 'duration' : 'Number of pages'; ?>" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Status</label>
                    <select class="form-select statusupdat" name="statusupdat">
                      <option selected disabled>Chose</option>
                      <option value="New" <?= $row['Status'] == 'New' ? ' selected="selected"' : ''; ?>>New</option>
                      <option value="Acceptable" <?= $row['Status'] == 'Acceptable' ? ' selected="selected"' : ''; ?>>Acceptable</option>
                      <option value="Quite worn" <?= $row['Status'] == 'Quite worn' ? ' selected="selected"' : ''; ?>>Quite worn</option>
                      <option value="Torn" <?= $row['Status'] == 'Torn' ? ' selected="selected"' : ''; ?>>Torn</option>
                    </select>
                    <small></small>
                  </div>
                </div>
                <div class="justify-content-end d-flex">
                  <button name="updatBtn" value="updatBtn" type="submit" class="btn bgbtn text-white">Modifier</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL DELETE -->
    <div class="modal" id="deletecollection<?= $row['ouvrages_Code'] ?>" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content h-25">
          <div class="modal-body texte-white bgmodal">
            <h3>étes vous sure de vouloir supprimer</h3>
            <form method="post" action="./book_office.php">
              <input type="hidden" name="delete_id" value="<?= $row['ouvrages_Code'] ?>">
              <input type="hidden" name="delete_idtype" value="<?= $row['Type_Code'] ?>">
              <button type="submit" name="delet" value="delete" class="btn bgbtn">
                Delete
              </button>
              <button type="button" class="btn btn-secondary buttons" data-bs-dismiss="modal">
                Cancel
              </button>
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



<!-- CODE PHP FOR ADD, UPDAT AND DELETE -->
<?php

include_once('../db.php');
$funObj = new dbConnect();
if (isset($_POST['addBtn'])) {
  $datacategorie = array(
    'Type_Code' => NULL,
    'Type_Name' => $_POST['typeadd'],
    'Type_Type' => $_POST['numberof']
  );
  $exist = $funObj->Insert('types', $datacategorie);
  $data = array(
    'ouvrages_Code' => NULL,
    'Title' => $_POST['titleadd'],
    'Author_Name' => $_POST['authoradd'],
    'Cover_Image' => $_FILES['fileInput']['name'],
    'State' => 'available',
    'Edition_Date' => $_POST['editiondateadd'],
    'Buy_Date' => $_POST['datepurchaseadd'],
    'Status' => $_POST['statusadd'],
    'Type_Code' =>  $exist,
  );
  $fileName = $_FILES["fileInput"]["name"];
  $tempName = $_FILES["fileInput"]["tmp_name"];
  $folder = "../images/" . $fileName;
  move_uploaded_file($tempName, $folder);
  $insert = $funObj->Insert('ouvrages', $data);
}
if (isset($_POST['updatBtn'])) {
  $datacategorieupdat = array(
    'Type_Name' => $_POST['typeupdat'],
    'Type_Type' => $_POST['numberofupdat']
  );
  $dataupdat = array(
    'Title' => $_POST['titleupdat'],
    'Author_Name' => $_POST['authoradd'],
    'Cover_Image' => $_FILES['fileInputupdat']['name'],
    'Edition_Date' => $_POST['editiondateupdat'],
    'Buy_Date' => $_POST['datepurchaseupdat'],
    'Status' => $_POST['statusupdat'],
  );
  if($_FILES['fileInputupdat']['name']==="")
  {
    $dataupdat["Cover_Image"]=$_POST['imageupdat'];
  }
  else{
    $dataupdat["Cover_Image"]=$_FILES['fileInputupdat']['name'];
    $fileName = $_FILES["fileInputupdat"]["name"];
    $tempName = $_FILES["fileInputupdat"]["tmp_name"];
    $folder = "../images/" . $fileName;
    move_uploaded_file($tempName, $folder);
  }
  $exist = $funObj->Updat('types', $datacategorieupdat, $_POST['idtype'], 'Type_Code');
  $updat = $funObj->Updat('ouvrages', $dataupdat, $_POST['id'], 'ouvrages_Code');
}
if (isset($_POST['delet'])) {
  $delet = $funObj->Delete('ouvrages','ouvrages_Code', $_POST['delete_id']);
  $delettype = $funObj->Delete('types', 'Type_Code', $_POST['delete_idtype']);
}
?>