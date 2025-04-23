<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM buku WHERE id=$id"));
?>

<h2>Edit Data Buku</h2>
<form method="post">
    Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>"><br><br>
    Penulis: <input type="text" name="penulis" value="<?= $data['penulis'] ?>"><br><br>
    <button type="submit">Update</button>
</form>

<?php
if ($_POST) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];

    mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis' WHERE id=$id");

    header("Location: index.php");
}
?>