<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-control me-2"></i>CPANEL</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?php echo $_SESSION["cnama"]; ?></h6>
                <span><?php echo $_SESSION["cstatus"]; ?></span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php?mnu=home" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Dashboard</a>
            <?php if ($_SESSION["cstatus"] == "Staff Kecamatan") { ?>
                <a href="?mnu=pprofil" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Profil</a>
                <a href="?mnu=skelurahan" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Kelurahan</a>
                <a href="?mnu=spenilaian" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Penilaian</a>
                <a href="?mnu=shasil" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Hasil</a>
            <?php } else if ($_SESSION["cstatus"] == "Administrator") { ?>
                <a href="?mnu=pengguna" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Pengguna</a>
                <a href="?mnu=kelurahan" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Kelurahan</a>
                <a href="?mnu=penilaian" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Penilaian</a>
				
				<a href="?mnu=saw" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Analisa</a>
				
				
                <a href="?mnu=hasil" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Hasil</a>
            <?php } ?>
            <a href="?mnu=logout" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->