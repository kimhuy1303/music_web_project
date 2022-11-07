<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="signin_action.php" method="post">
            <div class="logo">Archery</div>
            <div id="form_login">
                <div class="username">
                    <label for="username" >Username</label>
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <!-- icon here -->
                </div>
                <input type="submit" value="Log in" name="btnGui">
            </div>
            <p>Don't have account ? <a href="">Create now</a></p>
        </form>
    </div>
</body>
</html>

