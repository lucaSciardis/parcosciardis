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
$titolo = $_POST['my_input'];
echo '<div class="container-fluid fs-1 bg-dark text-white text-center">'.$titolo.'</div>';
?>


<div class="list-group">

</div>


</body>
</html>