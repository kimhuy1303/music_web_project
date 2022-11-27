<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/index.css" /> <!-- default css  -->
    <link rel="stylesheet" href="./css/sidebar.css"><!-- Link file sidebar.css -->
    <link rel="stylesheet" href="./css/main.css"> <!-- link file main.css -->
    <title>Archery Music | Nghe nhạc Mới, tải nhạc Hot chất lượng cao</title>
    <?php include_once('src/lib/lib.php');?>
    <!-- include library -->
</head>

<body>
    <?php include('pages/sidebar.php')?>
    <?php include('pages/main.php')?>
</body>
<script src="./js/index.js"></script>

</html>