<?php

include './functions.php';

if (isset($_GET['length'])) {
    $passwordLength = $_GET['length'];

    $response = generatePassword($passwordLength);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="index.php" method="GET">
            <h1><strong>Strong Password Generator</strong></h1>
            <h2>Genera una Password sicura</h1>
            <div class="mt-5 mb-5"></div>
            <div class="mb-3">
                <input type="number" name="length" id="length" class="form-control">
            </div>
            <div class="mb-3 ">
                <button class="btn btn-primary d-block w-100 " type="button" style="background: var(--bs-indigo); " onclick="generatePassword()">Crea Password</button>
            </div>
        </form>
        <?php if (isset($response)) { ?>
            <div class="col-7">
                <div class="alert alert-info" role="alert">
                    <?php echo $response; ?>
                </div>
            </div>

        <?php } ?>
    </div>
</body>
</html>
