<?php
$row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
?>

<h3>Insert Menu</h3>
<div class="form-group">
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group w-50">

            <label for="">Kategori</label><br>
            <select name="idkategori" id="">
                <?php foreach ($row as $r) : ?>
                    <option value="<?php echo $r['idkategori'] ?>"><?php echo $r['kategori'] ?></option>
                <?php endforeach ?>
            </select>

        </div>
        <div class="form-group w-50">

            <label for="">Nama menu</label>
            <input class="form-control" type="text" name="menu" placeholder="isi menu" required>

        </div>
        <div class="form-group w-50">

            <label for="">Harga</label>
            <input class="form-control" type="text" name="harga" placeholder="isi harga" number required>

        </div>
        <div class="form-group w-50">

            <label for="">Gambar</label><br>
            <input type="file" name="gambar">

        </div>

        <div class="">
            <input class="btn btn-primary" type="submit" name="simpan" value="simpan">
        </div>
    </form>
</div>

<?php
if (isset($_POST['simpan'])) {
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $idkategori = $_POST['idkategori'];
    $gambar = $_FILES['gambar']['name'];
    $temp = $_FILES['gambar']['tmp_name'];

    if (empty($gambar)) {
        echo "<h3> GAMBAR KOSONG </h3>";
    } else {
        $sql = "INSERT INTO tblmenu VALUES ('',$idkategori,'$menu','$gambar',$harga)";
        move_uploaded_file($temp, '../upload/' . $gambar);
        $db->runSQL($sql);
        header("location:?f=menu&m=select");
    }
}
?>