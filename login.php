<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="stylelogin.css">
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
            <?php
                if(isset($_GET["error"])){
                    $error = $_GET["error"];
                }
                else{
                    $error = "";
                }

                $message = "";
                if($error=="Gagal"){
                    $message = "Salah , Silahkan Coba Lagi";
                }
            ?>
            <br>
            <center>
                <p style="color:red"><?php echo $message;?></p>  
                <form action="loginproses.php" method="post">
                    <table>
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" size="20"></td>
                        </tr>
                        <tr>
                            <td>Password : </td>
                            <td><input type="password" name="password" size="20"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="login" value="Login"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </body>
</html>