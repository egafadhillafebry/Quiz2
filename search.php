<!DOCTYPE HTML>
<html>
    <head>
        <title>Detail Buku</title>
        <link rel="stylesheet" href="styleSearch.css" type="text/css">
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
                    $nama = $_GET["carinama"];
                    include "koneksi.php";
                
                    $query = "SELECT * FROM buku WHERE Judul LIKE '%$nama%'";
                    $result = mysqli_query($connect, $query);

                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>Isbn: &nbsp;&nbsp;</td>
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
                    }
                    else{
                        echo "0 results";
                    }
                ?>
            </table>
            <form action="homeHalaman.php" method="post">
                <button>Back</button>
            </form>
        </div>
    </body>
</html>