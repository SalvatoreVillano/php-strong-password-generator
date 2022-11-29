<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<header>

</header>

<body class="bg-info">
    <div class="container">
        <?php
        echo $_POST['pswlength'];
        ?>

        <form action="index.php" method="POST" name="emailform">
            <div class="mb-3">
                <label for="pswlength" class="form-label">Lunghezza Password</label>
                <input type="number" id="pswlength" name="pswlength" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-primary">Reset</button>

    </div>
</body>

<footer>

</footer>

</html>