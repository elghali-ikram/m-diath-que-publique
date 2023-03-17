<?php include("../includes/head.php") ?>
    <div class="bg">
        <?php session_start() ;
        include("../includes/navbar.php") ?>
    </div>
    <div class="d-flex p-4  flex-column justify-content-center align-items-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="bg d-md-flex mt-3 rounded w-50 p-2 ">
            <!-- FORM EDIT -->
            <?php
    include_once('../db.php');
    $obj = new dbConnect();
    echo $_SESSION["nickname"];
    $session=$_SESSION["nickname"];
    $where="Nickname='$session'";
    $result = $obj->Select('adherent', '*', $where);
    // print_r($result['result']);
    // print_r($result);
    // Loop through the result and display the records
    ?>
            <form action="" method="POST" class="p-5  d-flex flex-column  justify-content-center gap-4  w-100" id="editprofileform">
                <h4 class="text-center">Edit your account</h4>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="text" name="name" class="form-control" id="nameedit" placeholder="Enter your name" value="<?= $result['result']["Name"]?>" />
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="text" name="cin" class="form-control" id="cinedit" placeholder="Enter your cin" value="<?= $result['result']["CIN"]?>"/>
                        <small></small>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="number" name="phone" class="form-control" id="phoneedit" placeholder="Enter your phone" value="<?= $result['result']["Phone"]?>"/>
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="email" name="email" class="form-control" id="emailedit" placeholder="Enter your email" value="<?= $result['result']["Email"]?>"/>
                        <small></small>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="formvalid w-50">
                        <input type="text" name="adresse" class="form-control" id="adresseedit" placeholder="Enter your adresse" value="<?= $result['result']["Address"]?>"/>
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="text" name="type" class="form-control" id="typeedit" placeholder="Enter your type" value="<?= $result['result']["Occupation"]?>"/>
                        <small></small>
                    </div>
                </div>
                <div class="d-flex  gap-3">
                    <div class="formvalid  w-50">
                        <input type="text" name="nickname" class="form-control" id="nicknameedit" placeholder="Enter your nickname" value="<?= $result['result']["Nickname"]?>"/>
                        <small></small>
                    </div>
                    <div class="formvalid w-50">
                        <input type="date" name="bithdate" class="form-control" id="bithdateedit" placeholder="Enter your bithdate"  value="<?= $result['result']["Birth_Date"]?>"/>
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
                <button type="submit" class="btn bgbtn" value="edit_profile" name="edit_profile" id="edit_profile">Edit</button>
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
      <?php include("../includes/footer.php") ?>
      <?php
        if (isset($_POST["edit_profile"])) {
            print_r($_POST);
            # code...
        }
      ?>
