<?php include("../includes/head.php") ?>
    <div class="bg">
    <?php include("../includes/navbar.php") ?>
    </div>
    <div class="d-flex p-4 justify-content-center">
        <div class="bg d-flex mt-3 rounded w-75">
            <img src="../images/signin.svg" alt="" width="50%">
            <!-- FORM SIGN UP -->
            <form action="./signup.php" method="POST" class="p-5 w-75 d-flex flex-column justify-content-center gap-4" id="signupform">
                <h1 class="text-center">Create account</h1>
                <?php
if(isset($_POST["signupbtn"]))
{
    include_once('../db.php'); 
    $funObj = new dbConnect(); 
    $exist = $funObj->isUserExist($_POST['nickname'],$_POST['email'],$_POST['cin']);
    if(! $exist)
    {
        $signup = $funObj->signup($_POST['nickname'],$_POST['name'],$_POST['password'],$_POST['adresse'],$_POST['email'],$_POST['phone'] ,$_POST['cin'],$_POST['type'],$_POST['bithdate'] );
        if ($signup) {
            echo "data inserted";
        }
        else
        {
            echo "erreur";
        }
    }
    else{
        ?>
  
                <p class="text-center text-danger"><?php echo "Ce compte exist deja";}
            } ?></p>
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
                <button type="submit" class="btn bgbtn w-50 justify-content-center" name="signupbtn" value="signupbtn" id="signupbtn">Sign up</button>
                <a class="text-center text-decoration-none" href=""> <i class="fa-solid fa-circle-chevron-left"></i> back to login</a>
            </form>
        </div>
    </div>
    <?php include("../includes/footer.php") ?>