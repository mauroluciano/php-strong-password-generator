<?php
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $lunghezza = strlen($caratteri) - 1; 


        for ($i = 0; $i < 10; $i++) {

        $random = rand(0, $lunghezza);
        var_dump ($lunghezza);
        }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
</head>
<body>
    <form action="GET">
    <label>Password generata:</label><br>
    <input type="text" id="password" name="password"><br>

    <button>Genera password</button>

    </form>
    <?php endif; ?>
</body>
</html>