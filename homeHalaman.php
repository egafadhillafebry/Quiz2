<!DOCTYPE HTML>
<html>
    <head>
        <title>Bookshoop Ilmu Gemilang</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <table>
                <tr>
                    <td><h1>Bookshoop Ilmu Gemilang</h1></td>
                    <td><a href="home.php">Home</a></td>
                    <td><a href="login.php">Login</a></td>
                </tr>
            </table>
        </div>
        <div class="body">
            <br>
            <h2>Never Stop Reading</h2>
            <br>
            <form action="search.php" method="get">
                Cari Judul Buku : 
                <input type="text" name="carinama">&nbsp;
                <input type="submit" value="Cari">
            </form>
            <br>
            <table>
                <tr>
                    <th>Kode</th>
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
                        <a href="det.php?id=<?php echo $row["id_buku"];?>">
                        <button>Detail</button></a>
                    </td>
                </tr>
                <?php
                        }
                    }
                    else{
                        echo "0 results";
                    }
                ?>
            </table>
        </div>
    </body>
</html>