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
    <title>Password Generator</title>
</head>
<body>
    <div class="container">
        <h1>Password Generator</h1>
        <form action="generator.php">
            <div class="mb-3">
                <label for="passwoard-length" class="form-label">Lunghezza Password</label>
                <input type="number" name="length" value="<?php echo $_GET['length']?>" class="form-control" id="passwoard-length" required min="8" max="32">
            </div>
            <button class=""btn btn-primary>
                Invia
            </button>
        </form>
        <?php if($result['password']):?>
            <div class="alert alert-success">
                <?php echo $result['password'];?>
            </div>
        <?php endif; ?>
        <?php if($result):?>
        <div class="toast show d-flex align-items-center justify-content-between" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
            <?php echo $result['error'];?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <?php endif; ?>    
    </div>
</body>
</html>