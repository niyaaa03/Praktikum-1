<?php

$nama_buah = ["semangka", "melon", "apel", "jeruk", "pepaya"];
$nilai_siswa = ['nim'=>'0110121026', 'uts'=>100, 'uas'=>80, 'tugas'=>60];


foreach ($nilai_siswa as $siswa => $value) {
    echo $siswa . $value . "<br>";
}
?>