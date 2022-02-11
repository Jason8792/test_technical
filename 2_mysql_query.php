<?php

$connection = new mysqli("localhost", "root", "", "kelas");
if ($connection->connect_errno) {
    echo "gagal masuk ke database";
    exit();
}

$query = "SELECT s.mhs_nama from tb_mahasiswa s JOIN tb_mahasiswa_nilai n ON s.mhs_id = n.mhs_id JOIN tb_matakuliah m ON n.mk_id = m.mk_id WHERE m.mk_kode like 'MK303' ORDER by n.nilai DESC LIMIT 1";
$result = $connection->query($query);
echo " nilai mata kuliah tertinggi pada mata kuliah dengan kode MK303." . "<br>";
while ($row = $result->fetch_assoc()) {
    echo $row['mhs_nama'];
}
