<!DOCTYPE HTML>
<?php
    session_start();
?>
<html>
    <head>
        <title>Halaman Admin</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <table>
                <tr>
                    <td><h1>Bookshoop Ilmu Gemilang</h1></td>
                    <td><a href="homeCRUD.php"><h3>CRUD</h3></a></td>
                    <td><a href="logoutHome.php"><h3>Logout</h3></a></td>
                </tr>
            </table>
        </div>
        <div class="body">
            <br>
            <?php
                if(isset($_SESSION["username"])){
                    echo "<h2>Selamat Datang " . $_SESSION["username"] . "</h2><br>";
                }
                else{
                    echo "<h2>Maaf anda belum Login</h2>";
                }
            ?>
            <form action="tambahBuku.php" method="get">
                <button>Tambah Data Buku</button>
            </form>
            <br>
            <table>
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Keterangan</th>
                </tr>
                <?php
                    include "koneksi.php";

                    $query = "SELECT * FROM buku";
                    $result = mysqli_query($connect, $query);

                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row["id_buku"];?></td>
                    <td><?php echo $row["Judul"];?></td>
                    <td><?php echo $row["Pengarang"];?></td>
                    <td>
                        <a href="detailCRUD.php?id=<?php echo $row["id_buku"];?>">
                        <button>Detail</button></a>
                        <a href="editCRUD.php?id=<?php echo $row["id_buku"];?>">
                        <button>Edit</button></a>
                        <a href="deleteCRUD.php?id=<?php echo $row["id_buku"];?>">
                        <button>Delete</button></a>
                    </td>
                </tr>
                <?php
                        }
                    }
                    else{
                        echo "0 results";
                    }
                ?>
        </div>
    </body>
</html>