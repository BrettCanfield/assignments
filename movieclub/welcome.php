<?php 
if ($_GET['member'] === 'false'){
    header('Location: signup.php'); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
    <title>Home Page</title>
</head>
<body class = p-3>
    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <div class="card">
        <div class="card-body">
            <H1>Welcome, Movie Club member!</H1>
        </div>
    </div>
    
</body>
</html>