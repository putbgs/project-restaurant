<h3>Registrasi Pelanggan</h3>
<div class="form-group">
    <form action="" method="POST">

        <div class="form-group w-50">
            <label for="">Pelanggan</label>
            <input class="form-control" type="text" name="pelanggan" placeholder="isi pelanggan" required>
        </div>

        <div class="form-group w-50">
            <label for="">Alamat</label>
            <input class="form-control" type="text" name="alamat" placeholder="isi alamat" required>
        </div>

        <div class="form-group w-50">
            <label for="">Telp</label>
            <input class="form-control" type="text" name="tlp" placeholder="isi tlp" required>
        </div>

        <div class="form-group w-50">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group w-50">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>

        <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input class="form-control" type="password" name="konfirmasi" placeholder="Password" required>
        </div>


        <div class="">
            <input class="btn btn-primary" type="submit" name="simpan" value="simpan">
            </>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $pelanggan = $_POST['pelanggan'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];
    $level = $_POST['level'];


    if ($password === $konfirmasi) {
        $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$tlp','$email','$password',1)";
        $db->runSQL($sql);
        header("location:?f=home&m=info");
    } else {
        echo "<h2>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h2>";
    }
}
?>