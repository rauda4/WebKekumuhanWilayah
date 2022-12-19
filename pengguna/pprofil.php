<?php
$id_pengguna = $_SESSION["cid"];
$sql = "select * from `$tbpengguna` where `id_pengguna`='$id_pengguna'";
$d = getField($conn, $sql);
$id_pengguna = $d["id_pengguna"];
$level = $d["level"];
$nama_pengguna = $d["nama_pengguna"];
$username = $d["username"];
$password = $d["password"];
$telepon = $d["telepon"];
$email = $d["email"];
$status = $d["status"];
$keterangan = $d["keterangan"];
?><br>
<div class="row">
    <div class="col-md-4">
        <div class="card card-user">
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="img/user.png" width="80px" height="80px" alt="...">
                        <h5 class="title"><br><?php echo $nama_pengguna; ?></h5>
                    </a>
                    <p class="description">
                        <?php echo $level; ?>
                    </p>
                    <p class="description">
                        Telepon&nbsp;: <?php echo $telepon; ?><br>
                        Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $email; ?><br>
                        Status&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $status; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama_pengguna" disabled="" placeholder="Company" value="<?php echo $nama_pengguna; ?>">
                            </div>
                        </div>
                        <div class=" col-md-3 px-1">
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="number" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" name="Simpan" class="btn btn-primary btn-round">Update Profile</button>
                            <input name="id_pengguna" type="hidden" id="id_pengguna" value="<?php echo $id_pengguna; ?>" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["Simpan"])) {
    $id_pengguna = strip_tags($_POST["id_pengguna"]);
    $id_pengguna0 = strip_tags($_POST["id_pengguna0"]);
    $username = strip_tags($_POST["username"]);
    $nama_pengguna = strip_tags($_POST["nama_pengguna"]);
    $password = strip_tags($_POST["password"]);
    $telepon = strip_tags($_POST["telepon"]);
    $email = strip_tags($_POST["email"]);

    $sql = "UPDATE `$tbpengguna` SET 
	`username`='$username',
	`password`='$password',
	`telepon`='$telepon' ,
	`email`='$email'
	 WHERE `id_pengguna`='$id_pengguna'";
    $ubah = process($conn, $sql);
    if ($ubah) {
        echo "<script>alert('Data $email berhasil diubah !');document.location.href='?mnu=pprofil';</script>";
    } else {
        echo "<script>alert('Data $email gagal diubah...');document.location.href='?mnu=pprofil';</script>";
    }
} //else simpan
?>