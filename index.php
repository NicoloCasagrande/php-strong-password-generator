<?php 
    $alphabet = ['a', 'b', 'c'];
    $uppercase = ['A', 'B', 'C'];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $symbols = ['@', '#', '$', '*', ',', '.', '!'];

    $full_characters = array_merge($alphabet, $uppercase, $numbers, $symbols);

    if(isset($_GET['length'])){
        $password = "";
        for ($i=0; $i < $_GET['length']; $i++) { 
            $random_characters_index = rand(0, count($full_characters) -1);
            $password .= $full_characters[$random_characters_index];
        }
        var_dump($password);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Password Generator</h1>
        <form action="index.php">
            <div class="mb-3">
                <label for="passwoard-length" class="form-label">Lunghezza Password</label>
                <input type="number" name="length" class="form-control" id="passwoard-length" >
            </div>
            <button class=""btn btn-primary>
                Invia
            </button>
        </form>
    </div>
</body>
</html>