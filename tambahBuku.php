<!DOCTYPE HTML>
<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="Tambahstyle.css">
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
            <form action="tmbhPrs.php" method="get">
                <table>
                    <tr>
                        <td>Kode Buku : </td>
                        <td><input type="text" name="tambahKode"></td>
                    </tr>
                    <tr>
                        <td>Judul : </td>
                        <td><input type="text" name="tambahJudul"></td>
                    </tr>
                    <tr>
                        <td>Pengarang : </td>
                        <td><input type="text" name="tambahPengarang"></td>
                    </tr>
                    <tr>
                        <td>Penerbit : </td>
                        <td><input type="text" name="tambahPenerbit"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi : </td>
                        <td><textarea name="tambahDeskripsi" cols="25" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="send" value="Tambah"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>