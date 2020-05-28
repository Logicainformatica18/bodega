<?php
include 'php/functionperson.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <script src="function.js"></script>
</head>

<body class="login-img2-body">

    <div class="container">

        <form class="login-form" id="person">
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" name="login" class="form-control" placeholder="Dni" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label> -->
                <div class="col s12">
                    <select name="cargo" id="cargos" class="form-control">
                        <?php
                        $con = new connection();
                        $sql = mysqli_query($con->open(), "select * from cargo order by nombre desc");
                        while ($row = mysqli_fetch_array($sql)) {
                            $cargoid = $row['Cargoid'];
                            $nombre = $row['Nombre'];
                            echo "<option value='$cargoid'>" .  $nombre . "</option>";
                        }
                        ?>
                    </select>
                    <p></p>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="button" onclick="personLogin(); return false">Login</button>
                <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
            </div>
        </form>

        <div id="resultado"></div>
    </div>
    </div>




    <?php

    include "footer.php";
    ?>