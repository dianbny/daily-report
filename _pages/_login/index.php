<?php
    session_start();
    require_once "../../_config/_const.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/_assets/_css/_style_login.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/_assets/_vendors/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Login</title>
</head>
<body>
    <div class="content">
        <div class="left">
            <div>
                <h1>Welcome</h1>
                <p>
                    Management Daily Report System <br>
                    <b>Pertamina Hulu Indonesia Zona 10 Bunyu Field</b><br>
                    
                    <span>&copy; IT Bunyu Backbone | Ver. 1.1 </span>
                </p>

                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
        <div class="right">
            <?php
                if(isset($_SESSION['status']) && isset($_SESSION['msg'])){ ?>
                    <div class="error animate__animated animate__fadeInDown">
                        <?= $_SESSION['msg']; ?>
                    </div>
        <?php }
                session_destroy();
                ?>
            <div>
                <h3>L O G I N</h3>
                <form method="POST" action="<?= BASEURL; ?>/cek-login">
                    <div>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                        <i class="fa fa-user"></i>
                    </div>
                    <div>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <i class="fa fa-key"></i>
                    </div>
                    <div>
                        <input type="checkbox" id="showPass">&nbsp; <label for="showPass"> Show Password</label>
                    </div>

                    <input type="submit" name="login" value="Login" class="btn-login">
                </form>
            </div>
        </div>
    </div>

    <!--Javascript & JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type='text/javascript'>
        $(document).ready(function(){
            $('#showPass').click(function(){
                $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
            });
        });
    </script>
</body>
</html>