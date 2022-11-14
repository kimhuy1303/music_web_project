<?php
    function validation($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data; 
    }

    require_once('../admincp/config/connect.php');
    if(isset($_POST['btnGui']) && ($_POST['btnGui'])){
      $username = validation($_POST['username']);
      $pass1 = validation($_POST['password']);
      $pass2 = validation($_POST['repeatPassword']);
      if($pass1 == $pass2){

        $pass = md5($pass1);
        mysqli_query($conn,"insert into users(username, password) values('$username', '$pass')");
        header("Location: signin.php");
        
      }
      else{
        $thongbao = "Password lần 1 và lần 2 không chính xác với nhau";
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <title>ArcheryMusic</title>
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <script src="https://unpkg.com/phosphor-icons"></script>
</head>

<body>
    <div class="wrapper">
        <form method="post">
            <div class="logo" id="logo1">Register</div>
            <div class="logo" id="logo2">Create a new account</div>
            <?php if(isset($thongbao) && $thongbao != ""){ ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $thongbao; ?>
            </div>
            <?php
              }
            ?>
            <div id="form_login">
                <div class="username">
                    <i class="fa-solid fa-user"></i>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" required />
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required />
                    <i class="ph-eye-slash" id="btnPassword"></i>
                </div>
                <div class="repeatPassword">
                    <label for="repeatPassword">Repeat&nbsp;Password</label>
                    <input
                        type="password";
                        name="repeatPassword";
                        id="repeatPassword";
                        placeholder="Password";
                        required;
                        onkeyup="check()"
                    />
                    <i class="ph-eye-slash" id="btnPassword2"></i>
                </div>
                <div style=" color: red" id ="wrongPass"></div>
                <input id="login" type="submit" value="Sign up" name="btnGui" />
                <center>
                    <p id="thislink">Aleardy have account? <a id="hoverthislink" href="signin.html">Login now</a></p>
                </center>
        </form>
    </div>

</body>
<script>
const ipnElement = document.querySelector('#password')
const btnElement = document.querySelector('#btnPassword')

btnElement.addEventListener('click', function() {

    const currentType = ipnElement.getAttribute('type')

    ipnElement.setAttribute('type', currentType === 'password' ? 'text' : 'password')
    if (ipnElement.getAttribute('type') === 'password') {
        btnElement.className = 'ph-eye-slash'
    } else {
        btnElement.className = 'ph-eye'
    }
})

const ipnElement2 = document.querySelector('#repeatPassword')
const btnElement2 = document.querySelector('#btnPassword2')

btnElement2.addEventListener('click', function() {

    const currentType = ipnElement2.getAttribute('type')

    ipnElement2.setAttribute('type', currentType === 'password' ? 'text' : 'password')
    if (ipnElement2.getAttribute('type') === 'password') {
        btnElement2.className = 'ph-eye-slash'
    } else {
        btnElement2.className = 'ph-eye'
    }
})
function check(){
      var pass1 = document.getElementById("password").value;
      var pass2 = document.getElementById("repeatPassword").value;
      var errPass = document.getElementById("wrongPass");
          if(pass1 != pass2){
            document.getElementById("wrongPass").innerHTML ="Wrong pass";
          }
          else{
            document.getElementById("wrongPass").innerHTML ="";

          }
        }
</script>

</html>