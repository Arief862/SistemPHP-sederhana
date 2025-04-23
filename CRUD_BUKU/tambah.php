<?php include 'koneksi.php'; ?>

<h2>Tambah Data Buku</h2>
<form method="post">
    Judul: <input type="text" name="judul"><br><br>
    Penulis: <input type="text" name="penulis"><br><br>
    <button type="submit">Simpan</button>
</form>

<?php
if ($_POST) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];

    mysqli_query($koneksi, "INSERT INTO buku (judul, penulis) VALUES ('$judul', '$penulis')");
    
    header("Location: index.php");
}
?>