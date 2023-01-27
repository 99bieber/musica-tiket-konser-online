<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="proses/cek_login.php" method="post">
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="Sign%20up.php" class="signup-image-link">Create an account</a>
                        <a href="https://api.whatsapp.com/send?phone=6281945920003&text=Permisi Saya Ingin Mengkonfirmasi Akun Saya yang bernama (Masukkan Nama)" class="signup-image-link" target="_blank">Konfirmasi Admin</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form name="myForm" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" onclick="validateForm()"/>
                            </div>
                        </form>
                </div>
            </div>
        </section>
    </div>
</form>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function validateForm() {
          var x = myForm..value;
          if (x == "") {
            alert("Name must be filled out");
            return false;
          }
        }
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>