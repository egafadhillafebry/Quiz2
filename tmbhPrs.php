<?php
    include "koneksi.php";

    $kode = $_GET["tambahKode"];
    $judul = $_GET["tambahJudul"];
    $pengarang = $_GET["tambahPengarang"];
    $penerbit = $_GET["tambahPenerbit"];
    $deskripsi = $_GET["tambahDeskripsi"];

    $query = "INSERT INTO buku(id_buku, Judul, Pengarang, Penerbit, Deskripsi)
        VALUE('$kode','$judul','$pengarang','$penerbit','$deskripsi')";
    
    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>