
<?php
// memanggil class database
include '../classes/database.php';
// instansiasi class database
$db = new database;
?>

<h3>Data Mahasiswa</h3>
<a href="input_mhs.php">Tambah Mahasiswa</a>
<table border="1">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach ($db->tampil_mahasiswa() as $x){ 
?>
<tr>
    <th><?php echo $no++ ?></th>
    <th><?php echo $x['nim'] ?></th>
    <th><?php echo $x['nama'] ?></th>
    <th><?php echo $x['alamat'] ?></th>
    <td>
        <a href="edit_mhs.php">Edit</a>
        <a href="hapus_mhs.php">Hapus</a>
    </td>
</tr>
<?php
}
?>


</table>

