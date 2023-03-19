<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="library.css">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
</head>
<body>
   <div class="bg">
   <nav class="navbar navbar-expand-lg text-success">
   <div class="container-fluid d-flex justify-content-between">
      <h1>YOUR LIBRARY</h1>
       <div class="d-flex gap-3" id="">
         <a href="./user/signin.php"><button class="btn color" type="button">Sign in</button></a> 
         <a href="./user/signup.php"><button class="btn bgbtn" type="button">Sign up</button></a>
       </div>
   </div>
 </nav>     
  <div class="d-flex  justify-content-between" >
         <div class="p-5  d-flex flex-column justify-content-center"> 
            <h1>Lorem ipsum dolor sit amet</h1>
          <p class="p-3 bg_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <a href="./user/signin.php"> <button class="btn bgbtn w-75" type="button">Book Now</button></a>
         </div>
         <img src="./images/landing.svg" alt="landing image" width="58%" >
      </div>
      <footer class="d-flex  flex-column align-items-center">
         <div class="d-flex  gap-3  p-3">
            <a href="http://" class="btn text-light"><i class="fa-brands fa-facebook"></i></a>
            <a href="http://" class="btn text-light"><i class="fa-brands fa-google"></i></a>
            <a href="http://" class="btn text-light"><i class="fa-brands fa-twitter"></i></a>
         </div>
         <div class="">
            <p class="bg_p">© Copyright  2023 | Privacy Policy</p>
         </div>
      </footer>
</div>
<script src="https://kit.fontawesome.com/0f55910cdd.js" crossorigin="anonymous" ></script>
    <script src="library.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js" ></script>
</body>
</html>