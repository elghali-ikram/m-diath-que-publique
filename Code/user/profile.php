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
                <h1><a class="text-decoration-none" href="/Code/user.html">YOUR LIBRARY</a> </h1>
    
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
    <div class="d-flex p-4  flex-column justify-content-center align-items-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="bg d-md-flex mt-3 rounded w-50 p-2 ">
            <!-- FORM EDIT -->
            <form action="" method="POST" class="p-5  d-flex flex-column  justify-content-center gap-4  w-100" id="editprofileform">
                <h4 class="text-center">Edit your account</h4>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="text" name="name" class="form-control" id="nameedit" placeholder="Enter your name" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="text" name="cin" class="form-control" id="cinedit" placeholder="Enter your cin" />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="number" name="phone" class="form-control" id="phoneedit" placeholder="Enter your phone" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="email" name="email" class="form-control" id="emailedit" placeholder="Enter your email" />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="text" name="adresse" class="form-control" id="adresseedit" placeholder="Enter your adresse" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="text" name="type" class="form-control" id="typeedit" placeholder="Enter your type" />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex  gap-3">
                    <div class="formvalid  w-50">
                        <input type="text" name="nickname" class="form-control" id="nicknameedit" placeholder="Enter your nickname" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="date" name="bithdate" class="form-control" id="bithdateedit" placeholder="Enter your bithdate"  />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex  gap-3">
                    <div class="formvalid w-50">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="passwordedit" placeholder="Enter your password" />
                            <span class="input-group-text"  id="togglePasswordedit"><i class="fa fa-eye-slash"></i></span>
                        </div>
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <div class="input-group">
                            <input type="password" name="confirmpassword" class="form-control" id="confirmpasswordedit" placeholder="Enter your password" />
                            <span class="input-group-text"  id="togglePasswordconfirmedit"><i class="fa fa-eye-slash"></i></span>
                        </div>
                        <small></small>
                    </div>
                </div>
                <button type="submit" class="btn bgbtn" name="edit_profile" id="edit_profile">Edit</button>
            </form>
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
    <script src="../library.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>