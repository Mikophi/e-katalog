<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_sosmed = $_POST['nama_sosmed'];
$link = $_POST['link'];

//

//proses upload gambar
$nama_file = $_FILES['icon']['name'];
$source = $_FILES['icon']['tmp_name'];
$folder = './gambar/';
move_uploaded_file($source, $folder . $nama_file);
//
//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO social VALUES (
 NULL,
 '$nama_sosmed',
 '$link',
 '$nama_file'

 )");
//
//cek apakah proses simpan ke database berhasil
if ($insert)
{
    //jika berhasil tampilkan pesan berhasil simpan data
    echo "<script>
 alert('Data Berhasil Ditambahkan');
 window.location.href='index.php';
 </script>";
}
else
{
    //jika gagal tampilkan pesan gagal simpan data
    echo "<script>
 alert('Data Gagal Ditambahkan');
 window.location.href='index.php';
 </script>";
}
//
