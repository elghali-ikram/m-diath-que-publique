<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../library.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
</head>
<body>
    <div class="bg">
    <?php session_start() ;
        include("../includes/navbar.php") ?>
    </div>
    <!-- CARDS OF RESEREVATIONS -->
     <div class="d-flex  flex-column justify-content-center align-items-centergap-4">
      <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="d-flex p-4 justify-content-center gap-3 flex-wrap">
          <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/Code/images/landing.svg" class="img-fluid rounded-start" alt="..." width="200px">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">Author edition date</p>
                    <p class="card-text">Type</p>
                    <p class="card-text"><small class="text-muted">state status</small></p>
                    <form action="reserve.php" method="post">
                      <input type="hidden" name="id">
                      <button type="submit" class="btn bgbtn" name="reserve" >Cancel Reservation</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/Code/images/landing.svg" class="img-fluid rounded-start" alt="..." width="200px">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">Author edition date</p>
                    <p class="card-text">Type</p>
                    <p class="card-text"><small class="text-muted">state status</small></p>
                    <form action="reserve.php" method="post">
                      <input type="hidden" name="id">
                      <button type="submit" class="btn bgbtn" name="reserve" >Cancel Reservation</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/Code/images/landing.svg" class="img-fluid rounded-start" alt="..." width="200px">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">Author edition date</p>
                    <p class="card-text">Type</p>
                    <p class="card-text"><small class="text-muted">state status</small></p>
                    <form action="reserve.php" method="post">
                      <input type="hidden" name="id">
                      <button type="submit" class="btn bgbtn" name="reserve" >Cancel Reservation</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/Code/images/landing.svg" class="img-fluid rounded-start" alt="..." width="200px">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"> title</h5>
                    <p class="card-text">Author edition date</p>
                    <p class="card-text">Type</p>
                    <p class="card-text"><small class="text-muted">state status</small></p>
                    <form action="reserve.php" method="post">
                      <input type="hidden" name="id">
                      <button type="submit" class="btn bgbtn" name="reserve" >Cancel Reservation</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
     </div>


    <footer class="d-flex  flex-column align-items-center bg bottom-0">
      <div class="d-flex  gap-3  p-3">
         <a href="http://" class="btn text-light"><i class="fa-brands fa-facebook"></i></a>
         <a href="http://" class="btn text-light"><i class="fa-brands fa-google"></i></a>
         <a href="http://" class="btn text-light"><i class="fa-brands fa-twitter"></i></a>
      </div>
      <div class="">
         <p class="bg_p">© Copyright  2023 | Privacy Policy</p>
      </div>
   </footer>

   <script src="https://kit.fontawesome.com/0f55910cdd.js" crossorigin="anonymous" ></script>
    <script src="library.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>