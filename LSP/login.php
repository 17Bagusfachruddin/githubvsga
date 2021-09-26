<?php 
session_start();
require_once 'function/konek.php';

if(isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
//admin
//admin

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM tb_user WHERE username = '$username'") or die(mysqli_error($conn));
    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if($row != 0 ) {
            // pasang session
            $_SESSION['login'] = $row;
             // $_SESSION['username'] = $username;
             // $_SESSION['id'] = $data['id_user'];
             // $_SESSION['nama'] = $data['nama'];

            header("Location: index.php");
            exit;
        }else {
            echo '<script>alert("Username atau Password Salah!");</script>';
        }
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
            <div class="header">Sign In</div>
            <form action="" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" name="login" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <!-- <a href="register.php" class="text-center" class="fa fa-user">Register</a> -->

                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in as Anggota</span>
                <br/><a href="login-anggota.php" class="text-center" class="fa fa-user">Login Anggota</a>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>