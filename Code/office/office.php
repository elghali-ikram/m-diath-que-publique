<?php include("../includes/head.php") ?>
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
      <?php include("../includes/footer.php") ?>
