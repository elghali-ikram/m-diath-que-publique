<?php include("../includes/head.php") ?>
<div class="bg">
    <?php session_start();
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
        $session = $_SESSION["nickname"];
        $where = "Nickname='$session'";
        $result = $obj->Select('adherent', '*', $where);
    
        ?>
        <form action="./profile.php" method="POST" class="p-5  d-flex flex-column  justify-content-center gap-4  w-100" id="editprofileform">
            <h4 class="text-center">Edit your account</h4>
            <div class="d-flex gap-3">
                <div class="formvalid w-50">
                    <input type="text" name="name" class="form-control" id="nameedit" placeholder="Enter your name" value="<?= $result['result'][0]["Name"] ?>" />
                    <small></small>
                </div>
                <div class="formvalid w-50">
                    <input type="text" name="cin" class="form-control" id="cinedit" placeholder="Enter your cin" value="<?= $result['result'][0]["CIN"] ?>" />
                    <small></small>
                </div>
            </div>
            <div class="d-flex gap-3">
                <div class="formvalid w-50">
                    <input type="number" name="phone" class="form-control" id="phoneedit" placeholder="Enter your phone" value="<?= $result['result'][0]["Phone"] ?>" />
                    <small></small>
                </div>
                <div class="formvalid w-50">
                    <input type="email" name="email" class="form-control" id="emailedit" placeholder="Enter your email" value="<?= $result['result'][0]["Email"] ?>" />
                    <small></small>
                </div>
            </div>
            <div class="d-flex gap-3">
                <div class="formvalid w-50">
                    <input type="date" name="bithdate" class="form-control" id="bithdateedit" placeholder="Enter your bithdate" value="<?= $result['result'][0]["Birth_Date"] ?>" />
                    <small></small>
                </div>
                <div class="formvalid w-50">
                    <input type="text" name="type" class="form-control" id="typeedit" placeholder="Enter your type" value="<?= $result['result'][0]["Occupation"] ?>" />
                    <small></small>
                </div>
            </div>
            <div class="d-flex  gap-3">
                <div class="formvalid w-100">
                    <input type="text" name="adresse" class="form-control" id="adresseedit" placeholder="Enter your adresse" value="<?= $result['result'][0]["Address"] ?>" />
                    <small></small>
                </div>
            </div>
            <div class="d-flex  gap-3">
                <div class="formvalid w-50">
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" id="passwordedit" placeholder="Enter your password" />
                        <span class="input-group-text" id="togglePasswordedit"><i class="fa fa-eye-slash"></i></span>
                    </div>
                    <small></small>
                </div>
                <div class="formvalid w-50">
                    <div class="input-group">
                        <input type="password" name="confirmpassword" class="form-control" id="confirmpasswordedit" placeholder="Enter your password" />
                        <span class="input-group-text" id="togglePasswordconfirmedit"><i class="fa fa-eye-slash"></i></span>
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
        <p class="bg_p">© Copyright 2023 | Privacy Policy</p>
    </div>
</footer>
<?php include("../includes/footer.php") ?>
<?php
include_once('../db.php');
$funObj = new dbConnect();
$dataupdat = array(
    'Name' => $_POST['name'],
    'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    'Address' => $_POST['adresse'],
    'Email' => $_POST['email'],
    'Phone' => $_POST['phone'],
    'CIN' => $_POST['cin'],
    'Occupation' => $_POST['type'],
    'Birth_Date' => $_POST['bithdate'],
);
if (isset($_POST["edit_profile"])) {
    print_r($dataupdat);
    $exist = $funObj->isUserExist($_POST['nickname'], $_POST['email'], $_POST['cin']);
    if (!$exist) {
        $updat = $funObj->Updat('adherent', $dataupdat, $_SESSION["nickname"], 'Nickname');
        echo "<script>location.href='../logout.php';</script>";
    } else {
        echo '<script>alert("this information exist")</script>';
    }
}
?>