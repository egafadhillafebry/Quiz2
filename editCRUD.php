<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Edit</title>
        <link rel="stylesheet" href="styleEdt.css">
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
            <table>
                <?php
                    include "koneksi.php";
                    $kode = $_GET['id'];
                    $query = "SELECT * FROM buku WHERE id_buku=$kode";
                    $result = mysqli_query($connect, $query);
                ?>
                <form action="editPrs.php" method="get">
                    <table>
                        <?php
                            while($row=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td>Kode Buku : </td>
                            <td><input type="text" name="editKode" value="<?php echo $row['id_buku'];?>"readonly></td>
                        </tr>
                        <tr>
                            <td>Judul : </td>
                            <td><input type="text" name="editJudul" value="<?php echo $row['Judul'];?>"></td>
                        </tr>
                        <tr>
                            <td>Pengarang : </td>
                            <td><input type="text" name="editPengarang" value="<?php echo $row['Pengarang'];?>"></td>
                        </tr>
                        <tr>
                            <td>Penerbit : </td>
                            <td><input type="text" name="editPenerbit" value="<?php echo $row['Penerbit'];?>"></td>
                        </tr>
                        <tr>
                            <td>Deskripsi : </td>
                            <td><textarea name="editDeskripsi" cols="25" rows="10"><?php echo $row['Deskripsi'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="send" value="Simpan"></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </form>
            </table>
        </div>
    </body>
</html>