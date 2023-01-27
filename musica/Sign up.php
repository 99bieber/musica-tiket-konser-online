<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .image-cropper {
            width: 250px;
            height: 250px;
        }
        .profile-pic {
          display: inline;
          margin: 0 auto;
          height: 100%;
          width: auto;
        }
    </style>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form name="myForm" action="proses/register.php" method="post" class="register-form" id="register-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="fas fa-map-marker-alt"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat"/>
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-birthday-cake"></i></label>
                                <input type="text" name="umur" id="umur" placeholder="Umur"/>
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-city"></i></label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"/>
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-birthday-cake"></i></label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir"/>
                            </div>
                            <div class="form-group">
                                <label><i class="fab fa-whatsapp"></i></label>
                                <input type="text" name="telp" id="re_pass" placeholder="No. Telp"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password" id="re_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" name="angkat" required>
                                  <option value="">Pilih Register Sebagai?</option>
                                  <option value="1">Artis </option>
                                  <option value="0">Pembeli</option>
                                </select>
                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                            <div class="form-group form-button">
                                <input name="foto" type="file" id="image-source" onchange="previewImage();" />
                            </div>  
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register" onclick="validateForm()" />
                            </div>  
                        </form> 
                    </div>
                    <div class="signup-image form-group">
                        <figure>
                            <h1>Profile</h1>
                            <div class="image-cropper container">
                              <img id="image-preview" src="img/default-profile.png" class="profile-pic rounded" />
                            </div>
                        </figure>
                        <a href="sign%20in.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
    function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
  function validateForm() {
        var username = myForm.username.value;
        var umur = myForm.umur.value;
        var no = myForm.telp.value;
        if (username == "") {
          alert("Username Harus Diisi");
        } else if ((username.length<=6)||(username.length>=18)){
          alert("Harus diantara 6 - 18");
        }

        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(umur)===true) {
                    alert("Masukkan Umur Yang Valid");
            }

        if ((no.length<=8)) {
                alert("No Telp Minimal 8");
            }else{
                var regex = /^[a-zA-Z\s]+$/;
                if (regex.test(no)===true) {
                    alert("Masukkan nomor Yang Valid");
                }
            }
        }
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>