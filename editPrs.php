<?php
    include "koneksi.php";

    $kode = $_GET["editKode"];
    $judul = $_GET["editJudul"];
    $pengarang = $_GET["editPengarang"];
    $penerbit = $_GET["editPenerbit"];
    $deskripsi = $_GET["editDeskripsi"];

    $query = "UPDATE buku SET id_buku='$kode', Judul='$judul', Pengarang='$pengarang', Penerbit='$penerbit', Deskripsi='$deskripsi' WHERE id_buku=$kode";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Data Gagal Diubah <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>