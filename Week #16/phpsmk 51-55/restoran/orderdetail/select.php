<h3>Detail Pembelian</h3>

<div class="form-group">
    <form action="" method="POST">
        <div class="form-group w-50 float-left">
            <label for="">Tanggal Awal</label>
            <input class="form-control" type="date" name="tawal" required>

        </div>
        <div class="form-group w-50 float-left">
            <label for="">Tanggal Akhir</label>
            <input class="form-control" type="date" name="takhir" required>

        </div>

        <div class="">
            <input class="btn btn-primary" type="submit" name="simpan" value="Cari">
        </div>
    </form>
</div>

<?php



$jumlahdata = $db->rowCOUNT("SELECT idorderdetail FROM vorderdetail ");
$banyak = 3;

$halaman = ceil($jumlahdata / $banyak);

if (isset($_GET['p'])) {
    $p = $_GET['p'];
    $mulai = ($p * $banyak) - $banyak;
} else {
    $mulai = 0;
}

$sql = "SELECT * FROM vorderdetail ORDER BY idorderdetail DESC LIMIT $mulai,$banyak";

if (isset($_POST['simpan'])) {
    $tawal = $_POST['tawal'];
    $takhir = $_POST['takhir'];
    $sql = "SELECT * FROM vorderdetail WHERE tglorder BETWEEN '$tawal' AND '$takhir'";
}

$row = $db->getALL($sql);

$no = 1 + $mulai;

$total = 0;

?>

<table class="table table-bordered w-70 mt-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Alamat</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($row)) { ?>
            <?php foreach ($row as $r) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $r['pelanggan'] ?></td>
                    <td><?php echo $r['tglorder'] ?></td>
                    <td><?php echo $r['menu'] ?></td>
                    <td><?php echo $r['harga'] ?></td>
                    <td><?php echo $r['jumlah'] ?></td>
                    <td><?php echo $r['alamat'] ?></td>
                    <td><?php echo $r['jumlah'] * $r['harga'] ?></td>
                    <?php
                    $total = $total + ($r['jumlah'] * $r['harga']);
                    ?>
                </tr>
            <?php endforeach ?>
        <?php } ?>

        <tr>
            <td colspan="7">
                <h3>Grand Total</h3>

            </td>
            <td>
                <h4><?php echo $total ?></h4>
            </td>
        </tr>

    </tbody>
</table>

<?php

for ($i = 1; $i <= $halaman; $i++) {
    echo '<a href="?f=orderdetail&m=select&p=' . $i . '">' . $i . '</a>';
    echo '&nbsp &nbsp &nbsp';
}

?>