<?php

require_once "../function.php";




$sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
$result = mysqli_query($koneksi, $sql);

$row = mysqli_fetch_assoc($result);

echo $row['kategori'];

?>

<form action="" method="POST">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori'] ?>">
    <input type="submit" name="simpan" value="simpan">

</form>

<?php

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];

    $sql = "UPDATE tblkategori SET kategori='$kategoti' WHERE idkategori= $id";

    $result = mysqli_query($koneksi, $sql);

    header("location: http://localhost/phpsmk/restoran/kategori/select.php");
}


?>