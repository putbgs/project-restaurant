<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tblkategori WHERE idkategori= $id";

    $row = $db->getITEM($sql);
}
?>



<h3>Update Kategori</h3>
<div class="form-group">
    <form action="" method="POST">
        <div class="form-group w-50">
            <label for="">Nama Kategori</label>
            <input class="form-control" type="text" name="kategori" value="<?php echo $row['kategori'] ?>" required>
        </div>

        <div class="">
            <input class="btn btn-primary" type="submit" name="simpan" value="simpan">
        </div>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];

    $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= $id";
    $db->runSQL($sql);

    header("location:?f=kategori&m=select");
}
?>