<?php 
    $name = '';
    $favMovie = '';
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
    
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="favMovie" class="form-label">Favorite Movie</label>
            <input type="text" class="form-control" id="favMovie">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h2>Raw POST</h2>
    <pre><?php var_dump($_POST);?></pre>

</body>
</html>