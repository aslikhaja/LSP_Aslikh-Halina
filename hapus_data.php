<?php
include('koneksi.php');

$nomor_surat = $_GET['nomor_surat'];

$queryShow = "SELECT * FROM arsip WHERE nomor_surat = '$nomor_surat';";
$sqlShow = mysqli_query($koneksi, $queryShow);
$result = mysqli_fetch_assoc($sqlShow);

unlink("berkas/".$result['file']);

function hapus_data($koneksi, $nomor_surat){
    $del = "DELETE FROM arsip WHERE nomor_surat = '$nomor_surat' ";
    return $koneksi->query($del); //Parameter adalah variabel yang digunakan dalam sebuah fungsi untuk menerima masukan atau input dari luar fungsi tersebut
}

$check = hapus_data($koneksi, $nomor_surat);

if($check){
    echo 'Data berhasil dihapus';
}
else{
    echo 'Data gagal dihapus';
}
?>
<br>
<a href="index.php"> Kembali </a> 