<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>parcosciardis</title>
</head>

<body>
    <?php

    $regione = $_POST['regione'];
    echo '<div class="container-fluid fs-1 bg-dark text-white text-center">' . $regione . '</div>';
    $sql = "SELECT * FROM `tParco`;";
    $rec = mysqli_query($db_remoto, $sql) or die($sql . "<br>" . mysqli_error($db_remoto));

    while ($array = mysqli_fetch_array($rec)) {
        $id = $array['id'];
        $parco = $array['parco'];
        $parco_desc = $array['parco_desc'];
        $parco_img = $array['parco_img'];

        echo "<div class='card mx-auto mt-5' style='width: 18rem;'>";
        echo "<img src=" . $parco_img . " class='card-img-top' alt='...'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $parco . "</h5>";
        echo " <p class='card-text'>" . $parco_desc . "</p>";
        echo "<a href='#' class='btn btn-primary'>Info</a>";

    }
    ?>

    </div>
    </div>

</body>

</html>