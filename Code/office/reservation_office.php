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
        <nav class="navbar navbar-expand-lg text-success">
            <div class="container-fluid d-flex justify-content-between">
                <h1><a class="text-decoration-none" href="/Code/user.html">YOUR LIBRARY</a></h1>
                <div class="dropstart">
                  <div class="rounded-circle bgbtn d-flex justify-content-center align-items-center p-3"  data-bs-toggle="dropdown" aria-expanded="false">
                    <span >I K</span>
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
    <!-- CARDS OF RESEREVATIONS -->
     <div class="d-flex  flex-column justify-content-center align-items-centergap-4">
      <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="d-flex justify-content-center gap-2 flex-column w-100 p-5">
            <div class="d-flex justify-content-between bg_res h-50 rounded p-3 "  >
                <div class="d-flex gap-5 ">
                    <img src="../images/book.jpg" class="img-fluid rounded" alt="..." width="100px">
                    <div class="d-flex flex-column bg_p">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </h4>
                        <p><i class="fa-regular fa-calendar"></i>  12/12/2012</p>
                        <p><i class="fa-solid fa-user"></i> hussend</p>
                    </div>
                </div>
                <div class="d-flex gap-3 p-4">
                    <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="emprunt" >Emprunt</button>
                      </form>
                      <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="return" >Return</button>
                      </form>
                </div>
            </div>
            <div class="d-flex justify-content-between bg_res h-50 rounded p-3 " >
                <div class="d-flex gap-5">
                    <img src="../images/book.jpg" class="img-fluid rounded" alt="..." width="100px">
                    <div class="d-flex flex-column bg_p">
                        <h4>jhbjfnd</h4>
                        <p><i class="fa-regular fa-calendar"></i>  12/12/2012</p>
                        <p><i class="fa-solid fa-user"></i> hussend</p>
                    </div>
                </div>
                <div class="d-flex gap-3 p-4">
                    <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="emprunt" >Emprunt</button>
                      </form>
                      <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="return" >Return</button>
                      </form>
                </div>
            </div>
            <div class="d-flex justify-content-between bg_res h-50 rounded p-3 " >
                <div class="d-flex gap-5">
                    <img src="../images/book.jpg" class="img-fluid rounded" alt="..." width="100px">
                    <div class="d-flex flex-column bg_p">
                        <h4>jhbjfnd</h4>
                        <p><i class="fa-regular fa-calendar"></i>  12/12/2012</p>
                        <p><i class="fa-solid fa-user"></i> hussend</p>
                    </div>
                </div>
                <div class="d-flex gap-3 p-4">
                    <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="emprunt" >Emprunt</button>
                      </form>
                      <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="return" >Return</button>
                      </form>
                </div>
            </div>
            <div class="d-flex justify-content-between bg_res h-50 rounded p-3 " >
                <div class="d-flex gap-5">
                    <img src="../images/book.jpg" class="img-fluid rounded" alt="..." width="100px">
                    <div class="d-flex flex-column bg_p">
                        <h4>jhbjfnd</h4>
                        <p><i class="fa-regular fa-calendar"></i>  12/12/2012</p>
                        <p><i class="fa-solid fa-user"></i> hussend</p>
                    </div>
                </div>
                <div class="d-flex gap-3 p-4">
                    <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="emprunt" >Emprunt</button>
                      </form>
                      <form action="reserve.php" method="post">
                        <input type="hidden" name="id">
                        <button type="submit" class="btn bgbtn" name="return" >Return</button>
                      </form>
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