<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>

    <body style="background-color: #3d1a37;">
        <div id="wrapper">
            <div class="sidebar col-md-2 col-sm-2">
                <h1 class="icon"><i class="ph-target"></i>
                    <p class="Archery">Archery</p>
                </h1>
                <h2 class="menu">MENU</h2>
                <ul>
                    <li>
                        <i class="ph-fire-simple"></i>
                        <span>Explore</span>
                    </li>
                    <li><i class="ph-users"></i>Artists</li>
                    <li><i class="ph-headphones"></i>Podcasts</li>
                </ul>
                <h2 class="menu">MY MUSIC</h2>
                <ul>
                    <li>
                        <i class="ph-star"></i></i>
                        <span>Favorites</span>
                    </li>
                    <li><i class="ph-clock"></i></i>
                        <span>Recent</span>
                    </li>
                </ul>
                <h2 class="menu">PLAYLISTS</h2>
                <ul>
                    <li><i class="ph-folder-plus"></i><span>Create Now</span></li>
                </ul>
            </div>
            <div class="main row col-md-10 col-sm-10">
                <div class="form-field col-md-9 col-sm-9">
                    <div class="form-field">
                        <input type="text" class="form-input" placeholder="  Search for music, artists ect. ">
                        <label for="Search for music, artists ect." class="form-label"><i class='ph-magnifying-glass'
                                style="padding-left:20px; color: gray;"></i>
                        </label>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <a href="login/signin.php"><input id="signin" type="button" value="Sign in">
                    </a>
                </div>
                <div class="col-md-1 col-sm-1">
                    <i class="ph-gear"></i>
                </div>
            </div>
        </div>
    </body>

</html>