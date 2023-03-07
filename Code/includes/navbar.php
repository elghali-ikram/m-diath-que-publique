<?php
if(isset($_SESSION["nickname"]))
{
    if($_SESSION["admin"]==1)
    {?>
        <nav class="navbar navbar-expand-lg text-success">
            <div class="container-fluid d-flex justify-content-between">
                <h1><a class="text-decoration-none" href="./book_office.php">YOUR LIBRARY</a> </h1>
                <div class="dropstart">
                  <div class="rounded-circle bgbtn d-flex justify-content-center align-items-center p-3"  data-bs-toggle="dropdown" aria-expanded="false">
                    <span >I K</span>
                  </div>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./office.php">profile</a></li>
                    <li><a class="dropdown-item" href="./book_office.php">Our collection</a></li>
                    <li><a class="dropdown-item" href="./reservation_office.php"> Reservations</a></li>
                    <li><a class="dropdown-item" href="../logout.php"> Logout</a></li>
                  </ul>
                </div>
            </div>
        </nav>
<?php
    }
    elseif($_SESSION["admin"]== 0)
    {?>
        <nav class="navbar navbar-expand-lg text-success">
            <div class="container-fluid d-flex justify-content-between">
                <h1><a class="text-decoration-none" href="./user.php">YOUR LIBRARY</a> </h1>
                <div class="dropstart">
                  <div class="rounded-circle bgbtn d-flex justify-content-center align-items-center p-3"  data-bs-toggle="dropdown" aria-expanded="false">
                    <span >I K</span>
                  </div>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./profile.php">profile</a></li>
                    <li><a class="dropdown-item" href="./borrowed_user.php">my borrowings</a></li>
                    <li><a class="dropdown-item" href="./reservation_user.php">my reservations</a></li>
                    <li><a class="dropdown-item" href="../logout.php"> Logout</a></li>
                  </ul>
                </div>
            </div>
        </nav>
<?php  
    }
}
else     {?>
    <nav class="navbar navbar-expand-lg text-success">
   <div class="container-fluid d-flex justify-content-between">
   <h1><a class="text-decoration-none" href="../landing.php">YOUR LIBRARY</a> </h1>
       <div class="d-flex gap-3" id="">
         <a href="./signin.php"><button class="btn color" type="button">Sign in</button></a> 
         <a href="./signup.php"><button class="btn bgbtn" type="button">Sign up</button></a>
       </div>
   </div>
 </nav>
<?php 
}
?>