<?php

require 'function.php';


//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<style>

body {
  background-image: url("im.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
<body>

<center><table style="margin-left:auto;margin-right:auto" border="5" cellpadding="30" cellspacing="5"><center>
        <head>
        <center><h1>Tambah Data Mahasiswa</h1><center>

    <form action="" method="POST">
        
            <tr>
                <th><label for="nama"> NAMA : </label></th>
                <th><input type="text" name="nama" id="nama" required>
</tr>
            <tr>
                <th><label for="npm"> NPM : </label><th>
                <input type="text" name="npm" id="npm" required>
</tr>
            <tr>
                <th><label for="jurusan"> JURUSAN : </label><th>
                <input type="text" name="jurusan" id="jurusan" required>
</tr>
            <tr>
                <th><label for="email"> EMAIL : </label><th>
                <input type="text" name="email" id="email" required>
</tr>
            <tr><center>
                <th><label for="gambar"> PHOTO : </label><th>
                <input type="file" name="gambar" id="gambar" required><center>
</tr>
            
                <center><button type="submit" name="submit">TAMBAH DATA</button><center>

        

    </form>

</body>

</html>