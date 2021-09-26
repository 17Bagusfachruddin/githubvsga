<?php 
session_start();
require_once 'function/konek.php';
if (isset($_SESSION['username'])) header('Location: index-user  .php');


if (isset($_POST['login2'])) {
    // menghilangkan backshlases
    $username = $_POST['nim'];
    // menghilangkan backshlases
    $password = $_POST['nama'];

    //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
    if (!empty(trim($username)) && !empty(trim($password))) {

        //select data berdasarkan username dan password dari database
        $query      = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE nim = '$username'");
        $rows       = mysqli_num_rows($query);

        // var_dump($rows);
        // die;

        if ($rows != 0) {
            $data = mysqli_fetch_assoc($query);
            // var_dump($data);
            // die;
                    // buat session login dan username
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $data['id_anggota'];
                    // var_dump($_SESSION['id']);
                    // die;
                    $_SESSION['nama'] = $data['nama_anggota'];

                    // alihkan ke halaman dashboard admin
                    header("location: index-user.php");

        }else {
            echo '<script>alert("Username atau Password Salah!");</script>';
        }
    }else{
           echo '<script>alert("Username atau Password Salah!");</script>';
    }
}

?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In As ANGGGOTA</div>
            <form action="" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="nim" class="form-control" placeholder="Nim"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="login2" class="btn bg-olive btn-block">Sign me in</button>  
                    
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>