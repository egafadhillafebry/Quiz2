<?php
    include "koneksi.php";

    $kode = $_GET["id"];
    $query = "DELETE FROM buku WHERE id_buku=$kode";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Data Tidak Bisa Dihapus<br>";
        mysqli_error($connect);
    }
    mysqli_close();
?>