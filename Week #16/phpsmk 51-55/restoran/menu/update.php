<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";

    $item = $db->getITEM($sql);

    $idkategori = $item['idkategori'];
}
$row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
?>

<h3>Update Menu</h3>
<div class="form-group">
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group w-50">

            <label for="">Kategori</label><br>
            <select name="idkategori" id="">
                <?php foreach ($row as $r) : ?>
                    <option <?php if ($idkategori == $r['idkategori']) echo "selected" ?> value="<?php echo $r['idkategori'] ?>"><?php echo $r['kategori'] ?></option>
                <?php endforeach ?>
            </select>

        </div>
        <div class="form-group w-50">

            <label for="">Nama menu</label>
            <input class="form-control" type="text" name="menu" value="<?php echo $item['menu'] ?>" required>

        </div>
        <div class="form-group w-50">

            <label for="">Harga</label>
            <input class="form-control" type="text" name="harga" value="<?php echo $item['harga'] ?>" number required>

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
    $gambar = $item['gambar'];
    $temp = $_FILES['gambar']['tmp_name'];

    if (!empty($temp)) {
        $gambar = $_FILES['gambar']['name'];
        move_uploaded_file($temp, '../upload/' . $gambar);
    }




    $sql = "UPDATE tblmenu SET idkategori=$idkategori, 
            menu='$menu', gambar='$gambar', harga= $harga WHERE idmenu = $id";

    $db->runSQL($sql);
    header("location:?f=menu&m=select");
}
?>