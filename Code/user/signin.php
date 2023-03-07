<?php include("../includes/head.php") ?>
    <div class="bg">
    <?php include("../includes/navbar.php") ?>
    </div>
    <div class="d-flex p-4 justify-content-center">
        <div class="bg d-flex mt-3 rounded w-75">
            <img src="../images/signin.svg" alt="" width="50%">
            <!-- FORM SIGN IN -->
            <form action="./signin.php" method="POST" class="p-5 w-75 d-flex flex-column justify-content-center gap-4" id="signinform">
                <h1 class="text-center">LOG IN</h1>
                <?php
if(isset($_POST["signinbtn"]))
{
    include_once('../db.php'); 
    $funObj = new dbConnect(); 
    if( $funObj->signin($_POST['nickname'],$_POST['password']))
    {
        echo "exist";
        $funObj->signin($_POST['nickname'],$_POST['password']);
        $admin = $funObj->admin($_POST['nickname'],$_POST['password']);
        if($admin) 
        {
            echo "ADMIN";
            header("location: ../office/office.php");
        }
        else
        {
            echo "no";
            header("location: ../user/profile.php");
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
    <?php include("../includes/footer.php") ?>
