<!DOCTYPE HTML>
<html>
    <head>
        <title>Detail Buku</title>
        <link rel="stylesheet" href="styledet.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <table>
                <tr>
                    <td><h1>Bookshoop Ilmu Gemilang</h1></td>
                    <td><a href="homeHalaman.php">Home</a></td>
                    <td><a href="login.php">Login</a></td>
                </tr>
            </table>
        </div>
        <div class="body">
            <br>
            <h2>Detail Buku</h2>
            <br>
            <table>
                <?php
                    include "koneksi.php";
                    $id = $_GET['id'];
                    $query = "SELECT * FROM buku WHERE id_buku=$id";
                    $result = mysqli_query($connect, $query);

                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>Isbn:&nbsp;&nbsp;&nbsp;</td>
                    <td><?php echo $row["id_buku"];?></td>
                </tr>
                <tr>
                    <td>Judul:</td>
                    <td><?php echo $row["Judul"];?></td>
                </tr>
                <tr>
                    <td>Pengarang:</td>
                    <td><?php echo $row["Pengarang"];?></td>
                </tr>
                <tr>
                    <td>Penerbit:</td>
                    <td><?php echo $row["Penerbit"];?></td>
                </tr>
                <tr>
                    <td>Deskripsi:</td>
                    <td><?php echo $row["Deskripsi"];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <form action="homeHalaman.php" method="post">
                <button>Back</button>
            </form>
        </div>
    </body>
</html>