<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../library.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>library</title>
</head>

<body>
  <div class="bg">
    <nav class="navbar navbar-expand-lg text-success">
      <div class="container-fluid d-flex justify-content-between">
        <h1><a class="text-decoration-none" href="/Code/user.html">YOUR LIBRARY</a> </h1>
        <div class="dropstart">
          <div class="rounded-circle bgbtn d-flex justify-content-center align-items-center p-3"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span>I K</span>
          </div>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/Code/profile.html">profile</a></li>
            <li><a class="dropdown-item" href="/Code/borrowed_user.html">my borrowings</a></li>
            <li><a class="dropdown-item" href="/Code/reservation_user.html">my reservations</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="d-flex p-4 justify-content-center">
    <!-- BUTTON ADD-->
    <a data-bs-target="#addcollection" data-bs-toggle="modal" class="btn bgbtn w-50"><i class="fa-solid fa-plus"></i>  Add collection</a>
      <!-- MODAL ADD -->
  <div class="modal modal-lg fade" id="addcollection" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content h-25">
      <div class="modal-body container p-5">
        <form action="" method="POST" class="myFormadd" enctype="multipart/form-data">
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
                <input type="text" name="titleadd" class="form-control titleadd" value="" placeholder="Title" />
                <small></small>
              </div>
              <div class="w-50 formvalid">
                <label class="form-label">Author</label>
                <input type="number" min="0" name="authoradd" class="form-control authoradd" value=""
                  placeholder="Author" />
                <small></small>
              </div>
            </div>
            <div class="d-flex gap-3">
              <div class="w-50 formvalid">
                <label class="form-label">Date Edition</label>
                <input type="text" name="editiondateadd" class="form-control editiondateadd" value=""
                  placeholder="Date Edition" />
                <small></small>
              </div>
              <div class="w-50 formvalid">
                <label f class="form-label">Date of purchase</label>
                <input type="number" name="datepurchaseadd " class="form-control datepurchaseadd" value=""
                  placeholder="date of purchase" />
                <small></small>
              </div>

            </div>
            <div class="d-flex gap-3">
              <div class="w-50 formvalid">
                <label class="form-label">State</label>
                <select class="form-select stateadd" name="stateadd">
                  <option selected disabled>Choisir</option>
                  <option value="Location">Location</option>
                  <option value="Vente">Vente</option>
                </select>
                <small></small>
              </div>
              <div class="w-50 formvalid">
                <label class="form-label">Status</label>
                <select class="form-select statusadd" name="statusadd">
                  <option selected disabled>Choisir</option>
                  <option value="Location">Location</option>
                  <option value="Vente">Vente</option>
                </select>
                <small></small>
              </div>
            </div>
            <div class="w-50 formvalid">
              <label class="form-label">Type</label>
              <select class="form-select typeadd" name="typeadd">
                <option selected disabled>Choisir</option>
                <option value="Location">Location</option>
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
  <div class="modal modal-lg fade" id="editcollection" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                  <input type="number" min="0" name="author" class="form-control authorupdat" value=""
                    placeholder="Author" />
                  <small></small>
                </div>
              </div>
              <div class="d-flex gap-3">
                <div class="w-50 formvalid">
                  <label class="form-label">Date Edition</label>
                  <input type="text" name="editiondate" class="form-control editiondateupdat" value=""
                    placeholder="Date Edition" />
                  <small></small>
                </div>
                <div class="w-50 formvalid">
                  <label f class="form-label">Date of purchase</label>
                  <input type="number" name="datepurchase " class="form-control datepurchaseupdat" value=""
                    placeholder="date of purchase" />
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
        <input type="hidden" name="delete_id" value="" >
          <button  type="submit" name="delet"  class="btn bgbtn">
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
  <script src="https://kit.fontawesome.com/0f55910cdd.js" crossorigin="anonymous"></script>
  <script src="../library.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>