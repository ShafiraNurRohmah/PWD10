<?php
$url = "http://localhost/PRAK_PWD10/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
echo "<p>";
echo "NIM : " . $r->nim . "<br />";
echo "Nama : " . $r->nama . "<br />";
echo "Jenis Kelamin : " . $r->jkel . "<br />";
echo "Alamat : " . $r->alamat . "<br />";
echo "Tanggal lahir : " . $r->tgllhr . "<br />";
echo "Prodi : " . $r->prodi . "<br />";
echo "</p>";
}