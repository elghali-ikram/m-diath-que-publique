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
    <div class="d-flex  flex-column justify-content-center align-items-centergap-4">
      <h3 class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h3>
        <div class="d-flex p-4 justify-content-center gap-3 flex-wrap">
          <div class="card" style="width: 18rem;">
            <img src="/Code/images/book.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> title</h5>
              <p class="card-text">Author edition date</p>
              <p class="card-text">Type</p>
              <p class="card-text"><small class="text-muted">state status</small></p>
              <p class="card-text fw-bold">Return date: 12/12/2001</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="/Code/images/book.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> title</h5>
              <p class="card-text">Author edition date</p>
              <p class="card-text">Type</p>
              <p class="card-text"><small class="text-muted">state status</small></p>
              <p class="card-text fw-bold">Return date: 12/12/2001</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="/Code/images/book.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> title</h5>
              <p class="card-text">Author edition date</p>
              <p class="card-text">Type</p>
              <p class="card-text"><small class="text-muted">state status</small></p>
              <p class="card-text fw-bold">Return date: 12/12/2001</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="/Code/images/book.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> title</h5>
              <p class="card-text">Author edition date</p>
              <p class="card-text">Type</p>
              <p class="card-text"><small class="text-muted">state status</small></p>
              <p class="card-text fw-bold">Return date: 12/12/2001</p>
            </div>
          </div>
        </div>
    </div>
      <footer class="d-flex  flex-column align-items-center bg">
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