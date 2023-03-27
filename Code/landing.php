<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="library.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
  <div class="d-flex  justify-content-between">
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
</div>
<script src="https://kit.fontawesome.com/0f55910cdd.js" crossorigin="anonymous" ></script>
    <script src="library.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
include_once('./db.php');
$funObj = new dbConnect();
$dataupdat= array(
  'State' => 'available'
);
$select= $funObj->Select('reservation','*', "Reservation_confirm=0");
foreach ($select["result"] as $row) {
  if($row["Reservation_Expiration_Date"] < date("Y-m-d"))
  {
    $delet = $funObj->Delete('reservation','Reservation_Code', $row["Reservation_Code"]);
    $updat = $funObj->Updat('ouvrages', $dataupdat, $row["ouvrages_Code"], 'ouvrages_Code');
  }
}
?>
