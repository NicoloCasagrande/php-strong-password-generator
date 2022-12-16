<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
</head>
<body>
    <div class="container">
        <?php if($_SESSION['password']): ?>
            <div class="alert alert-success">
                <h1>Password Generata</h1>
                <?php echo $result['password'];?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>