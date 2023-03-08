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
    <div class="d-flex p-4  flex-column justify-content-center align-items-center">
        <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="d-flex mt-3 gap-4 justify-content-center  w-50 p-2 ">
            <!-- OUVRAGES RESERVATIONS  -->
            <div class="h-100 card">
                <img src="../images/library.jpg" alt="" class="img-fluid opacity-75 rounded-start" width="100%" height="410px">
                <div class="card-img-overlay text-center fw-bold align-content-center top-50">
                    <button class="btn bg_office w-75"><a class="text-decoration-none" href="./reservation_office.php">Reservations</a> </button>
                </div>
            </div>
            <div class="h-100 card">
                <img src="../images/library.jpg" alt="" class="img-fluid opacity-75 rounded-start" width="100%" height="410px">
                <div class="card-img-overlay text-center fw-bold align-content-center top-50">
                    <button class="btn bg_office w-75"> <a href="./book_office.php" class="text-decoration-none">Ouvrages</a> </button>
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