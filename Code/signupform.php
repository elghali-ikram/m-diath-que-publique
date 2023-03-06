<?php
  include_once('./db.php'); 
  $funObj = new dbConnect(); 
  $signup = $funObj->signup($_POST['nickname'],$_POST['name'],$_POST['password'],$_POST['adresse'],$_POST['email'],$_POST['phone'] ,$_POST['cin'],$_POST['type'],$_POST['bithdate'] );
  if (! $signup) {
    echo "erreur";

  }
  else
  {
    echo "data inserted";

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="library.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
</head>

<body>
    <div class="bg">
        <nav class="navbar navbar-expand-lg text-success">
            <div class="container-fluid d-flex justify-content-between">
                <h1>YOUR LIBRARY</h1>
                <div class="d-flex gap-3 " id="" role="search">
                    <button class="btn color" type="button">Sign in</button>
                    <button class="btn bgbtn" type="button">Sign up</button>
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex p-4 justify-content-center">
        <div class="bg d-flex mt-3 rounded w-75">
            <img src="./images/signin.svg" alt="" width="50%">
            <!-- FORM SIGN UP -->
            <form action="./signup.php" method="POST" class="p-5 w-75 d-flex flex-column justify-content-center gap-4" id="signupform">
                <h1 class="text-center">Create account</h1>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="text" name="cin" class="form-control" id="cin" placeholder="Enter your cin" />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your phone" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Enter your adresse" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter your type" />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex  gap-3">
                    <div class="formvalid  w-50">
                        <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Enter your nickname" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="date" name="bithdate" class="form-control" id="bithdate" placeholder="Enter your bithdate"  />
                        <small></small>
                    </div>
                </div>
                <div class="d-flex  gap-3">
                    <div class="formvalid w-50">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" />
                            <span class="input-group-text"  id="togglePassword"><i class="fa fa-eye-slash"></i></span>
                        </div>
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <div class="input-group">
                            <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Enter your password" />
                            <span class="input-group-text"  id="togglePasswordconfirm"><i class="fa fa-eye-slash"></i></span>
                        </div>
                        <small></small>
                    </div>
                </div>
                <button type="submit" class="btn bgbtn w-50 justify-content-center" name="signupbtn" id="signupbtn">Sign up</button>
                <a class="text-center text-decoration-none" href=""> <i class="fa-solid fa-circle-chevron-left"></i> back to login</a>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/0f55910cdd.js" crossorigin="anonymous"></script>

    <script src="../Code/library.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>