<h3>Insert User</h3>
<div class="form-group">
    <form action="" method="POST">

        <div class="form-group w-50">
            <label for="">Nama user</label>
            <input class="form-control" type="text" name="user" placeholder="isi user" required>
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

        <div class="form-group w-50">
            <label for="">Level</label><br>
            <select name="level" id="">

                <option value="admin">admin</option>
                <option value="koki">koki</option>
                <option value="kasir">kasir</option>

            </select>
        </div>

        <div class="">
            <input class="btn btn-primary" type="submit" name="simpan" value="simpan">
        </div>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $konfirmasi = hash('sha256', $_POST['konfirmasi']);
    $level = $_POST['level'];


    if ($password === $konfirmasi) {
        $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";

        $db->runSQL($sql);
        header("location:?f=user&m=select");
    } else {
        echo "<h2>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h2>";
    }
}
?>