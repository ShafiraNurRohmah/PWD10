<?php
include_once("koneksi.php");
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}
?>
<table border="1">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Prodi</th>
    </tr>
    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $sql = "select * from mahasiswa where nama like'%" . $cari . "%'";
        $tampil = mysqli_query($koneksi, $sql);
    } else {
        $sql = "select * from mahasiswa";
        $tampil = mysqli_query($koneksi, $sql);
    }
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $r['nim']; ?></td>
            <td><?php echo $r['nama']; ?></td>
            <td><?php echo $r['jkel']; ?></td>
            <td><?php echo $r['alamat']; ?></td>
            <td><?php echo $r['tgllhr']; ?></td>
            <td><?php echo $r['prodi']; ?></td>
        </tr>
    <?php } ?>
</table>