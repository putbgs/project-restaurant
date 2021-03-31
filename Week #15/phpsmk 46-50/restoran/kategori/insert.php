<h3>Insert Kategori</h3>
<div class="form-group">
    <form action="" method="POST">
        <div class="form-group w-50">
            <label for="">Nama Kategori</label>
            <input class="form-control" type="text" name="kategori" placeholder="isi kategori" required>

        </div>

        <div class="">
            <input class="btn btn-primary" type="submit" name="simpan" value="simpan">
        </div>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
    $db->runSQL($sql);

    header("location:?f=kategori&m=select");
}
?>