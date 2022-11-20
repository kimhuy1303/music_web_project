<?php 
  session_start();
  
  require_once('../admincp/config/connect.php');
  if(isset($_POST['btnGui']) && $_POST['btnGui']){
    $tk = $_POST['username'];
    $pwd = md5($_POST['password']);
    $rows = mysqli_query($conn, "select * from users where username = '$tk' and password = '$pwd'");
    if(mysqli_num_rows($rows) == 1){
      header('location:../index.php');
      // $_SESSION['loged'] = true;
    }
    else{
      // header('location:localhost/MusicWeb/login/signin.php');
      echo "<script type = 'text/javascript'>
        alert('Đăng nhập không thành công');
      </script>";
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
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet" />
    <title>Archery Music | Nghe nhạc mới, Tải nhạc Hot chất lượng cao</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <script src="https://unpkg.com/phosphor-icons"></script>
</head>

<body>
    <?php 
    if(isset($_SESSION['thongbao'])){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align:center; width:468px; margin:0 auto">
        <strong>'.$_SESSION['thongbao'].'</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="wrapper">
        <form method="post">
            <div class="logo">
                <i class="ph-target"></i>
                <p>Archery</p>
            </div>
            <br />
            <br />
            <div id="form_login">
                <div class="username">
                    <i class="fa-solid fa-user"></i>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" required />
                </div>
                <br />
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required />
                    <a></a>
                    <i class="ph-eye-slash" id="btnPassword"></i>
                </div>
                <br />
                <br />
                <input id="login" type="submit" value="Log in" name="btnGui" />
            </div>
            <br />
            <br />
            <br />
            <center>
                <p id="thislink">
                    Don't have account ?
                    <a id="hoverthislink" href="register.php">Create now</a>
                </p>
            </center>
        </form>
    </div>
</body>
<script>
const ipnElement = document.querySelector("#password");
const btnElement = document.querySelector("#btnPassword");

btnElement.addEventListener("click", function() {
    const currentType = ipnElement.getAttribute("type");

    ipnElement.setAttribute(
        "type",
        currentType === "password" ? "text" : "password"
    );
    if (ipnElement.getAttribute("type") === "password") {
        btnElement.className = "ph-eye-slash";
    } else {
        btnElement.className = "ph-eye";
    }
});
</script>

</html>