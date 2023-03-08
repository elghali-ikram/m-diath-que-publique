<?php include("../includes/head.php") ?>
  </div>
  <div class="bg">
    <?php session_start();
    include("../includes/navbar.php") ?>
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
                    <input type="text" name="titleadd" class="form-control titleadd"  placeholder="Title" />
                    <small></small>
                  </div>
                  <div class="w-50 formvalid">
                    <label class="form-label">Author</label>
                    <input type="text" min="0" name="authoradd" class="form-control authoradd"  placeholder="Author" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Date Edition</label>
                    <input type="date" name="editiondateadd" class="form-control editiondateadd"  placeholder="Date Edition" />
                    <small></small>
                  </div>
                  <div class="w-50 formvalid">
                    <label  class="form-label">Date of purchase</label>
                    <input type="date" name="datepurchaseadd" class="form-control datepurchaseadd"  placeholder="date of purchase" />
                    <small></small>
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <div class="w-50 formvalid">
                    <label class="form-label">Type</label>
                    <select class="form-select typeadd" name="typeadd">
                      <option selected disabled>Choisir</option>
                      <option value="livre">livre</option>
                      <option value="revue">revue</option>
                      <option value="roman">roman</option>
                      <option value="DVD">DVD</option>
                    </select>
                    <small></small>
                  </div>
                  <div class="w-50 formvalid visi">
                  <label class="form-label">Type</label>
                    <input type="text" name="numberof" class="form-control numberof"  placeholder="numberof" />
                    <small></small>
                  </div>
                </div>
                <div class="w-50 formvalid">
                  <label class="form-label">Status</label>
                  <select class="form-select statusadd" name="statusadd">
                    <option selected disabled>Choisir</option>
                    <option value="Neuf">Neuf</option>
                    <option value="Vente">Vente</option>
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
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/library.jpg" class="img-fluid rounded-start" alt="..." width="310px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"> title</h5>
            <p class="card-text">Author edition date</p>
            <p class="card-text">Type</p>
            <p class="card-text"><small class="text-muted">state status</small></p>
            <form action="reserve.php" class="d-flex gap-3" method="post">
              <input type="hidden" name="id">
              <a data-bs-target="#editcollection" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></a>
              <a data-bs-target="#deletecollection" data-bs-toggle="modal"><i class="fa-regular fa-trash-can"></i></a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/library.jpg" class="img-fluid rounded-start" alt="..." width="310px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"> title</h5>
            <p class="card-text">Author edition date</p>
            <p class="card-text">Type</p>
            <p class="card-text"><small class="text-muted">state status</small></p>
            <form action="reserve.php" class="d-flex gap-3" method="post">
              <input type="hidden" name="id">
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></a>
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-regular fa-trash-can"></i></a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/library.jpg" class="img-fluid rounded-start" alt="..." width="310px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"> title</h5>
            <p class="card-text">Author edition date</p>
            <p class="card-text">Type</p>
            <p class="card-text"><small class="text-muted">state status</small></p>
            <form action="reserve.php" class="d-flex gap-3" method="post">
              <input type="hidden" name="id">
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></a>
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-regular fa-trash-can"></i></a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/library.jpg" class="img-fluid rounded-start" alt="..." width="310px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"> title</h5>
            <p class="card-text">Author edition date</p>
            <p class="card-text">Type</p>
            <p class="card-text"><small class="text-muted">state status</small></p>
            <form action="reserve.php" class="d-flex gap-3" method="post">
              <input type="hidden" name="id">
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></a>
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-regular fa-trash-can"></i></a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../images/library.jpg" class="img-fluid rounded-start" alt="..." width="310px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"> title</h5>
            <p class="card-text">Author edition date</p>
            <p class="card-text">Type</p>
            <p class="card-text"><small class="text-muted">state status</small></p>
            <form action="reserve.php" class="d-flex gap-3" method="post">
              <input type="hidden" name="id">
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-solid fa-pen-to-square"></i></a>
              <a data-bs-target="" data-bs-toggle="modal"><i class="fa-regular fa-trash-can"></i></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL UPDAT -->
  <div class="modal modal-lg fade" id="editcollection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content h-25">
        <div class="modal-body container p-5">
          <form action="" method="POST" class="myFormupdat" enctype="multipart/form-data">
            <h2 class="text-center">Update a collection</h2>
            <input type="hidden" name="id">
            <div class=" d-flex flex-column gap-3">
              <div class="formvalid">
                <div class="file-inputs d-md-flex flex-column justify-content-center align-items-center mb-3">
                  <img class="iconupdat" src="../images/upload.svg" alt="Upload Icon" />
                  <input type="file" name="fileInputupdat" class="fileInputupdat" />
                  <img class="previewImageupdat" src="#" alt="Image Preview" />
                </div>
                <small></small>
              </div>
              <div class="d-flex gap-3">
                <div class="w-50 formvalid">
                  <label class="form-label">Title</label>
                  <input type="text" name="titleupdat" class="form-control titleupdat" value="" placeholder="Title" />
                  <small></small>
                </div>
                <div class="w-50 formvalid">
                  <label class="form-label">Author</label>
                  <input type="text" min="0" name="author" class="form-control authorupdat" value="" placeholder="Author" />
                  <small></small>
                </div>
              </div>
              <div class="d-flex gap-3">
                <div class="w-50 formvalid">
                  <label class="form-label">Date Edition</label>
                  <input type="date" name="editiondate" class="form-control editiondateupdat" value="" placeholder="Date Edition" />
                  <small></small>
                </div>
                <div class="w-50 formvalid">
                  <label f class="form-label">Date of purchase</label>
                  <input type="date" name="datepurchase " class="form-control datepurchaseupdat" value="" placeholder="date of purchase" />
                  <small></small>
                </div>
              </div>
              <div class="d-flex gap-3">
                <div class="w-50 formvalid">
                  <label class="form-label">State</label>
                  <select class="form-select stateupdat" name="stateupdat">
                    <option selected disabled>Choisir</option>
                    <option value="Location">Location</option>
                    <option value="Vente">Vente</option>
                  </select>
                  <small></small>
                </div>
                <div class="w-50 formvalid">
                  <label class="form-label">Status</label>
                  <select class="form-select statusupdat" name="statusupdat">
                    <option selected disabled>Choisir</option>
                    <option value="Location">Location</option>
                    <option value="Vente">Vente</option>
                  </select>
                  <small></small>
                </div>
              </div>
              <div class="w-50 formvalid">
                <label class="form-label">Type</label>
                <select class="form-select typeupdat" name="typeupdat">
                  <option selected disabled>Choisir</option>
                  <option value="Location">Location</option>
                  <option value="Vente">Vente</option>
                </select>
                <small></small>
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
  <div class="modal" id="deletecollection" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content h-25">
        <div class="modal-body texte-white bgmodal">
          <h3>étes vous sure de vouloir supprimer</h3>
          <form method="post" action="delet.php">
            <input type="hidden" name="delete_id" value="">
            <button type="submit" name="delet" class="btn bgbtn">
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
  


  <!-- CODE PHP FOR ADD -->
  <?php
        include_once('../db.php'); 
        $funObj = new dbConnect(); 

        // $exist = $funObj->Delete('types', 1); 
        // echo "knj";

        // if($exist)
        // {
        //   echo "kayn";
        // }
        // else
        // {
        //   echo "walo";
        // }

  $datacategorie = array(
    'Type_Code' => NULL,
    'Type_Name' => $_POST['typeadd'],
    'Type_Type' => $_POST['numberof']);
    if(isset($_POST['addBtn']))
    {
      echo $_POST['datepurchaseadd'];
       $exist = $funObj->Insert('types', $datacategorie);
       echo $exist;
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
      $insert = $funObj->Insert('ouvrages', $data);
      echo $insert;
    }

    
  ?>
