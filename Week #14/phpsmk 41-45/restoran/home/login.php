<div class="row">
    <div class="col-4 mx-auto mt-4">
        <div class="form-group">
            <form action="" method="POST">

                <div class="">
                    <h3>LOGIN PELANGGAN</h3>
                </div>

                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input class="form-control" type="email" name="email" placeholder="Isi Email" required>
                </div>

                <div class="form-group">
                    <label for="">PASSWORD</label>
                    <input class="form-control" type="password" name="password" placeholder="Isi Password" required>
                </div>

                <div class="">
                    <input class="btn btn-primary" type="submit" name="login" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
        echo "<center><h3>Email atau Password SALAH</h3></center>";
    } else {
        $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
        $row = $db->getITEM($sql);

        $_SESSION['pelanggan'] = $row['email'];
        $_SESSION['idpelanggan'] = $row['idpelanggan'];

        header("location: index.php");
    }
}
?>