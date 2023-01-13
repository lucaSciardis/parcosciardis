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
    <form action="regione.php" method="post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Seleziona Regione</label>
            <select class="form-select" name="regione">
                <?php
                $sql = "SELECT * FROM `tRegione`";
                $rec = mysqli_query($db_remoto, $sql) or die($sql . "<br>" . mysqli_error($db_remoto));

                while ($array = mysqli_fetch_array($rec)) {
                    $id = $array['id'];
                    $nome = $array['nome'];

                    echo "<option name='regione' id='regione'>" . $nome . "</option>";
                }

                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>