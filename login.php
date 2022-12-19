<?php
session_start();
require_once "konmysqli.php";
?>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="login/css/style.css">

</head>

<body style="background-image: url(img/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"> </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div>
                        <!--class="wrap"-->
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Login</h3>
                                </div>
                            </div>
                            <form action="#" method="post" class="signin-form">
                                <div class="form-group mt-3">
                                    <input type="text" name="user" class="form-control" required>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" name="pass" required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="Login" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="login/js/jquery.min.js"></script>
    <script src="login/js/popper.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
</body>

</html>

<?php
if (isset($_POST["Login"])) {
    $usr = $_POST["user"];
    $pas = $_POST["pass"];

    $sql1 = "select * from `$tbpengguna` where `username`='$usr' and `password`='$pas' and `status`='Aktif'";

    if (getJum($conn, $sql1) > 0) {
        $d = getField($conn, $sql1);
        $kode = $d["id_pengguna"];
        $nama = $d["nama_pengguna"];
        $level = $d["level"];
        $_SESSION["cid"] = $kode;
        $_SESSION["cnama"] = $nama;
        $_SESSION["cstatus"] = $level;
        echo "<script>alert('Otentikasi " . $_SESSION["cstatus"] . " an " . $_SESSION["cnama"] . " (" . $_SESSION["cid"] . ") berhasil Login!');
		document.location.href='index.php?mnu=home';</script>";
    } else {
        session_destroy();
        echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
			document.location.href='index.php?mnu=login';</script>";
    }
}


?>