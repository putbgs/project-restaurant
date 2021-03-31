<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tbluser WHERE iduser = $id";
    $row = $db->getITEM($sql);
}

?>


<h3>Update User</h3>
<div class="form-group">
    <form action="" method="POST">

        <div class="form-group w-50">
            <label for="">Nama user</label>
            <input class="form-control" type="text" name="user" value="<?php echo $row['user'] ?>" required>
        </div>

        <div class="form-group w-50">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" value="<?php echo $row['email'] ?>" required>
        </div>

        <div class="form-group w-50">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" value="<?php echo $row['password'] ?>" required>
        </div>

        <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input class="form-control" type="password" name="konfirmasi" value="<?php echo $row['password'] ?>" required>
        </div>

        <div class="form-group w-50">
            <label for="">Level</label><br>
            <select name="level" id="">

                <option value="admin" <?php if ($row['level'] === "admin") echo "selected" ?>>admin</option>
                <option value="koki" <?php if ($row['level'] === "koki") echo "selected" ?>>koki</option>
                <option value="kasir" <?php if ($row['level'] === "kasir") echo "selected" ?>>kasir</option>

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
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];
    $level = $_POST['level'];


    if ($password === $konfirmasi) {
        $sql = "UPDATE tbluser SET user='$user' ,email='$email' ,password='$password',level='$level' WHERE iduser= $id";


        $db->runSQL($sql);
        header("location:?f=user&m=select");
    } else {
        echo "<h2>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h2>";
    }
}
?>