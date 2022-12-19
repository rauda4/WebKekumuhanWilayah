<?php require_once "partials/data.php"; ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light text-center rounded p-4">
                <h4>Algoritma Simple Additive Weighting dan Algoritma Simple Multi Attribute Rating Technique untuk Menentukan Tingkat Kekumuhan Kawasan <br>Jakarta Selatan</h4>
                <img src="img/Seal_of_South_Jakarta.png">
            </div>
        </div>

    </div>
</div>
<!-- Sales Chart End -->

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Kelurahan</h6>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th width="3%">No</th>
                        <th width="50%">Nama Kelurahan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $sql = "select * from `$tbkelurahan`  order by `id_kelurahan` asc";
                        $jum = getJum($conn, $sql);
                        if ($jum > 0) {
                            $no = 1;
                            $arr = getData($conn, $sql);
                            foreach ($arr as $d) {
                                $id_kelurahan = $d["id_kelurahan"];
                                $nama_kelurahan = strtoupper($d["nama_kelurahan"]);
                                $deskripsi = $d["deskripsi"];
                        ?>
                                <td><?php echo $no; ?></td>
                                <td><b><?php echo $nama_kelurahan; ?></b><br>
                                    <small><?php echo $deskripsi; ?></small>
                                </td>
                    </tr>
            <?php $no++;
                            } //for dalam
                        } //if
                        else {
                            echo "<tr><td colspan='6'><blink>Maaf, Data kelurahan belum tersedia...</blink></td></tr>";
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->