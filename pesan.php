<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesan</title>
</head>
<body>

<h2>Data Pesan Masuk</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Nama</th>
    <th>Pesan</th>
</tr>

<?php
$data = mysqli_query($koneksi,"SELECT * FROM kontak");

while($d = mysqli_fetch_assoc($data)){
?>
<tr>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['pesan']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>