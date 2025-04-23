<?php include 'koneksi.php'; ?>
<h2>Data Buku</h2>
<a href="tambah.php">+ Tambah Buku</a>
<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Aksi</th>
</tr>
<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM buku");
while ($row = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['judul'] ?></td>
    <td><?= $row['penulis'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>