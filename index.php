<?php
if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
    error_reporting(E_ALL & ~E_NOTICE);
?>
<?php
session_start();
//error_reporting(0);
require_once "konmysqli.php";

$mnu = "";
if (isset($_GET["mnu"])) {
    $mnu = $_GET["mnu"];
}
if (!isset($_SESSION["cid"])) {
    die("<script>location.href='login.php';</script>");
}

?>
<?php require_once "partials/header.php"; ?>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <?php require_once "partials/sidebar.php"; ?>
        <div class="content">
            <?php require_once "partials/navbar.php"; ?>

<?php
if ($mnu == "pengguna") {
require_once "pengguna/pengguna.php";
} else if ($mnu == "pprofil") {
require_once "pengguna/pprofil.php";
} else if ($mnu == "kelurahan") {
require_once "kelurahan/kelurahan.php";
} else if ($mnu == "penilaian") {
require_once "penilaian/penilaian.php";
} else if ($mnu == "detail") {
require_once "detail/detail.php";
} else if ($mnu == "hasil") {
require_once "hasil/hasil.php";
} else if ($mnu == "skelurahan") {
require_once "kelurahan/skelurahan.php";
} else if ($mnu == "spenilaian") {
require_once "penilaian/spenilaian.php";
} else if ($mnu == "sdetail") {
require_once "detail/sdetail.php";
} else if ($mnu == "shasil") {
require_once "hasil/shasil.php";
} else if ($mnu == "login") {
require_once "login.php";
} else if ($mnu == "logout") {
require_once "logout.php";
} 
else if ($mnu == "saw") {
require_once "saw.php";
} 
else if ($mnu == "smart") {
require_once "smart.php";
} 
else {
require_once "home.php";
}
?>
<?php require_once "partials/footer.php";
?>

        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php require_once "partials/js.php";
    ?>
</body>

</html>