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
    <script src="js.js"></script>
    <title>parcosciardis</title>
    </head>
<body>
<div class="container-fluid fs-1 bg-dark text-white text-center">Parco Sciardis</div>
<div id="scelta_parco">
<form method="POST" action="dopo.php">
<div class="list-group id='list-tab'">
<?php
$sql = "SELECT * FROM tregione";
$rec = mysqli_query($db_remoto, $sql) or die($sql . "<br>" . mysqli_error($db_remoto));
while ($array = mysqli_fetch_array($rec)) {
    $id = $array['id'];
    $nome = $array['nome'];
    echo '  <a href="regione.php" class="list-group-item list-group-item-action">'. $nome .'</a>';
 }
?>
</div>
</form>
</div>




</body>
</html>