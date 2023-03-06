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
            <!-- FORM SIGN IN -->
            <form action="./signin.php" method="POST" class="p-5 w-75 d-flex flex-column justify-content-center gap-4" id="signinform">
                <h1 class="text-center">LOG IN</h1>
                <?php
if(isset($_POST["signinbtn"]))
{
    include_once('./db.php'); 
    $funObj = new dbConnect(); 
    if( $funObj->signin($_POST['nickname'],$_POST['password']))
    {
        echo "exist";
        $funObj->signin($_POST['nickname'],$_POST['password']);
        $admin = $funObj->admin($_POST['nickname'],$_POST['password']);
        if($admin) 
        {
            echo "ADMIN";
            header("location: ./office/office.php");
        }
        else
        {
            echo "no";
            header("location: ./user/profile.php");
        }
    }
    else{
        ?>
             <p class="texte-danger">Compte no valid</p>
             <?php
    }}
        ?>
                <div class="formvalid ">
                    <input type="text" name="nickname" class="form-control" id="nicknamesignin" placeholder="Enter your nickname" />
                    <small></small>
                </div>
                <div class="formvalid">
                    <input type="password" name="password" class="form-control" id="passwordsignin" placeholder="Enter your password" />
                    <small></small>
                </div>
                <button type="submit" class="btn bgbtn" name="signinbtn" value="signinbtn" id="signinbtn">Sign up</button>
                <a class="text-center text-decoration-none" href=""> Register here<i class="fa-solid fa-circle-chevron-right"></i></a>
            </form>
        </div>

    </div>
    <script src="https://kit.fontawesome.com/0f55910cdd.js" crossorigin="anonymous"></script>

    <script src="library.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>